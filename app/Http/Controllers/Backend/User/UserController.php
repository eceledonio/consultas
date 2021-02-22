<?php

namespace App\Http\Controllers\Backend\User;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\UserRequest;
use App\Models\Auth\Permission;
use App\Models\Auth\User;
use App\Repositories\Auth\PermissionRepository;
use App\Repositories\Auth\RoleRepository;
use App\Repositories\Auth\UserRepository;
use DataTables;
use Exception;
use Illuminate\Support\Facades\Auth;
use Throwable;

/**
 * Class UserController.
 */
class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @var RoleRepository
     */
    protected $roleRepository;

    /**
     * @var PermissionRepository
     */
    protected $permissionRepository;

    /**
     * UserController constructor.
     *
     * @param  UserRepository  $userRepository
     * @param  RoleRepository  $roleRepository
     * @param  PermissionRepository  $permissionRepository
     */
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository, PermissionRepository $permissionRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * Show the DataTables resource.
     *
     * @param UserRequest $request
     *
     * @throws Exception
     * @return mixed
     * @throws Exception
     */
    public function getDataTables(UserRequest $request)
    {
        return Datatables::of($this->userRepository->getForDataTable($request->get('status'), $request->get('trashed')))
            ->escapeColumns(['email'])
            ->editColumn('email_verified_at', function ($user) {
                return view('backend.auth.user.includes.verified', ['user' => $user]);
            })
            ->filterColumn('email_verified_at', function ($query, $keyword) {
                $param = strtolower($keyword) == __('si');

                if ($param) {
                    $query->whereNotNull('email_verified_at');
                } else {
                    $query->whereNull('email_verified_at');
                }
            })
            ->editColumn('two_factor_authentications', function ($user) {
                return view('backend.auth.user.includes.2fa', ['user' => $user]);
            })
            ->addColumn('roles', function ($user) {
                return "<span class='btn btn-light-primary font-weight-lighter btn-sm'>$user->roles_label</span>";
            })
            ->addColumn('permissions', function ($user) {
                return "<span class='btn btn-light-warning font-weight-lighter btn-sm'>$user->permissions_label</span>";
            })
            ->addColumn('actions', function ($user) {
                return view('backend.auth.user.includes.actions', ['user' => $user]);
            })
            ->make(true);
    }

    public function index(UserRequest $request)
    {
        $page_title = 'Administración de usuarios';
        $page_description = 'Usuarios activos';

        return view('backend.auth.user.index', compact('page_title', 'page_description'));
    }

    public function create(UserRequest $request)
    {
        $page_title = __('Administración de usuarios');
        $page_description = __('Nuevo Usuario');

        $permissions = Permission::with('module')->orderBy('permissions.id', 'ASC')->get();
        $permissions = $permissions->groupBy('module.name');

        $userRoles = [];

        foreach (Auth::user()->roles as $r) {
            $userRoles[] = $r->id;
        }

        return view('backend.auth.user.create', compact('page_title', 'page_description'))
            ->withRoles($this->roleRepository->with('permissions')->get(['id', 'name']))
            ->withUserRoles($userRoles)
            ->withPermissions($permissions);
    }

    /**
     * @param UserRequest $request
     *
     * @return mixed
     * @throws GeneralException
     * @throws Throwable
     */
    public function store(UserRequest $request)
    {
        $user = $this->userRepository->store($request->validated());

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__("El usuario $user->name ha sido creado correctamente."));
    }

    /**
     * @param UserRequest $request
     * @param User $user
     *
     * @return mixed
     */
    public function show(UserRequest $request, User $user)
    {
        $page_title = __('Administración de usuarios');
        $page_description = __('Visualizando usuario :name', ['name' => $user->name]);

        return view('backend.auth.user.show')
            ->withUser($user)
            ->with('page_title', $page_title)
            ->with('page_description', $page_description);
    }

    /**
     * @param UserRequest $request
     * @param User $user
     *
     * @return mixed
     * @throws GeneralException
     */
    public function edit(UserRequest $request, User $user)
    {
        if ($user->id == 1 && Auth::user()->id != 1 || $user->id == 2 && Auth::user()->id != 2) {
            throw new GeneralException(__('Solo el Administrador puede actualizar este usuario.'));
        }

        $page_title = __('Administracion de usuarios');
        $page_description = __('Actualizando usuario :name', ['name' => $user->name]);

        return view('backend.auth.user.edit')
            ->withUser($user)
            ->withRoles($this->roleRepository->get())
            ->withUserRoles($user->roles->pluck('name')->all())
            ->withPermissions($this->permissionRepository->get(['id', 'name']))
            ->withUserPermissions($user->permissions->pluck('name')->all())
            ->with('page_title', $page_title)
            ->with('page_description', $page_description);
    }

    /**
     * @param  UserRequest  $request
     * @param  User  $user
     *
     * @return mixed
     * @throws Throwable
     */
    public function update(UserRequest $request, User $user)
    {
        if ($user->id == 1 && Auth::user()->id != 1 || $user->id == 2 && Auth::user()->id != 2) {
            throw new GeneralException(__('Solo el Administrador puede actualizar este usuario.'));
        }

        $this->userRepository->update($user, $request->validated());

        return redirect()->route('admin.auth.user.edit', $user)->withFlashSuccess(__("El usuario $user->name fue actualizado correctamente."));
    }

    /**
     * @param  UserRequest  $request
     * @param  User  $user
     *
     * @return mixed
     * @throws GeneralException
     */
    public function delete(UserRequest $request, User $user)
    {
        if ($user->id == 1 || $user->id == 2) {
            throw new GeneralException(__('No puedes eliminar el administrador.'));
        }

        $this->userRepository->delete($user);

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__("El usuario $user->name ha sido eliminado correctamente."));
    }
}
