<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Auth\UserLog;

/**
 * Class UserLogController.
 */
class UserLogController extends Controller
{
    /**
     * UserLog constructor.
     *
     * @param  UserLog  $model
     */
    public function __construct(UserLog $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $logs = UserLog::with('user', 'recordableUser')
                       ->whereNotIn('event', ['synced', 'detached'])
                       ->orderBy('id', 'desc')
                       ->get();

        return view('backend.logs.index')
            ->withLogs($logs);
    }

    public function show($id)
    {
        $log = UserLog::with('user', 'recordableUser')
                      ->where('id', $id)
                      ->first();

        return view('backend.logs.show')
            ->withLog($log);
    }

    public function restore($id)
    {
        $ul = UserLog::findOrFail($id);
        $model = $ul->recordable_type;
        $row_id = $ul->recordable_id;
        $properties = $ul->properties;

        $model::where('id', '=', $row_id)->update($properties);

        return redirect()->route('admin.auth.logs.index')->withFlashSuccess(__('El registro fue restaurado correctamente.'));
    }
}
