<?php

namespace App\Http\Controllers\Backend\Backup;

use App\Exceptions\GeneralException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Adapter\Local;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     * @throws GeneralException
     * @return Response
     */
    public function index()
    {
        $page_title = 'Administración de Copias de Seguridad';

        if (! count(config('backup.backup.destination.disks'))) {
            throw new GeneralException(__('No existe ningún disco configurado config/backup.php'));
        }

        $backups = [];

        foreach (config('backup.backup.destination.disks') as $disk_name) {
            $disk = Storage::disk($disk_name);
            $adapter = $disk->getDriver()->getAdapter();
            $files = $disk->allFiles();

            // make an array of backup files, with their filesize and creation date
            foreach ($files as $k => $f) {
                // only take the zip files into account
                if (substr($f, -4) === '.zip' && $disk->exists($f)) {
                    $backups[] = [
                        'file_path' => $f,
                        'file_name' => str_replace('backups/', '', $f),
                        'file_size' => $disk->size($f),
                        'last_modified' => $disk->lastModified($f),
                        'disk' => $disk_name,
                        'download' => (bool) ($adapter instanceof Local),
                    ];
                }
            }
        }

        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);
        $count = count($backups);

        return view('backend.backup.index', compact('backups', 'count', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response|string
     */
    public function create()
    {
        $message = 'success';

        try {
            ini_set('max_execution_time', 1200);

            logger('Copia de Seguridad -- ejecutando backup:run desde el admin.');

            Artisan::call('backup:run --only-db');

            $output = Artisan::output();

            if (strpos($output, 'La copia de seguridad ha fallado')) {
                preg_match('/La copia de seguridad ha fallado(.*?)$/ms', $output, $match);
                $message = 'La copia de seguridad ha fallado ';
                $message .= $match[1] ?? '';
                logger($message.PHP_EOL.$output);
            } else {
                logger('Copia de Seguridad -- el proceso ha iniciado.');
            }
        } catch (Exception $e) {
            Response::make($e->getMessage(), 500);
            logger($e->getMessage());
        }

        logger('Copia de Seguridad Finalizada.');

        return $message;
    }

    /**
     * Downloads a backup zip file.
     *
     * @param Request $request
     *
     * @return BinaryFileResponse
     */
    public function download(Request $request)
    {
        $disk = Storage::disk($request->input('disk'));
        $file_name = $request->input('file_name');
        $adapter = $disk->getDriver()->getAdapter();

        if ($adapter instanceof Local) {
            $storage_path = $disk->getDriver()->getAdapter()->getPathPrefix();

            if ($disk->exists($file_name)) {
                return response()->download($storage_path.$file_name);
            }

            abort(404, __('La copia de seguridad no existe.'));
        } else {
            abort(404, __('Solo se permiten descargas del sistema de archivos local.'));
        }
    }

    /**
     * Deletes a backup file.
     *
     * @param $file_name
     * @param Request $request
     *
     * @return string
     */
    public function delete($file_name, Request $request)
    {
        $disk = Storage::disk($request->input('disk'));

        if ($disk->exists($file_name)) {
            $disk->delete($file_name);

            return 'success';
        }

        abort(404, __('La copia de seguridad no existe.'));
    }
}
