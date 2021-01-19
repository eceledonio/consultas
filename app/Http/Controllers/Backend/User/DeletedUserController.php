<?php

namespace App\Http\Controllers\Backend\User;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\UserRequest;
use App\Models\Auth\User;
use App\Repositories\Auth\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class DeletedUserController.
 */
class DeletedUserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * DeletedUserController constructor.
     *
     * @param  UserRepository  $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return Application|Factory|View
     */
    public function index(UserRequest $request)
    {
        $page_title = 'Administración de usuarios';
        $page_description = 'Usuarios eliminados';

        return view('backend.auth.user.deleted', compact('page_title', 'page_description'));
    }

    /**
     * @param UserRequest $request
     * @param User $deletedUser
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(UserRequest $request, User $deletedUser)
    {
        $this->userRepository->restore($deletedUser);

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('El usuario ha sido restaurado correctamente.'));
    }

    /**
     * @param UserRequest $request
     * @param User $deletedUser
     *
     * @return mixed
     * @throws GeneralException
     */
    public function destroy(UserRequest $request, User $deletedUser)
    {
        abort_unless(config('boilerplate.access.user.permanently_delete'), 404);

        $this->userRepository->destroy($deletedUser);

        return redirect()->route('admin.auth.user.deleted')->withFlashSuccess(__('El usuario ha sido eliminado permanentemente.'));
    }
}
