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
 * Class UserStatusController.
 */
class DeactivatedUserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * DeactivatedUserController constructor.
     *
     * @param  UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UserRequest $request
     * @return Application|Factory|View
     */
    public function index(UserRequest $request)
    {
        $page_title = 'Administración de usuarios';
        $page_description = 'Usuarios desactivados';

        return view('backend.auth.user.deactivated', compact('page_title', 'page_description'));
    }

    /**
     * @param UserRequest $request
     * @param User $user
     * @param $status
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(UserRequest $request, User $user, $status)
    {
        $this->userRepository->mark($user, (int) $status);

        return redirect()->route(
            (int) $status === 1 || ! $request->user()->can('users.deactivate') ?
                'admin.auth.user.index' :
                'admin.auth.user.deactivated'
        )->withFlashSuccess(__("El usuario $user->name fue actualizado correctamente."));
    }
}
