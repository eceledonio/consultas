<?php

namespace App\Http\Controllers\Backend\Role;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Role\RoleRequest;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Repositories\Auth\PermissionRepository;
use App\Repositories\Auth\RoleRepository;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Throwable;

/**
 * Class RoleController.
 */
class RoleController extends Controller
{
    /**
     * @var RoleRepository
     */
    protected $roleRepository;

    /**
     * @var PermissionRepository
     */
    protected $permissionRepository;

    /**
     * RoleController constructor.
     *
     * @param  RoleRepository  $roleRepository
     * @param  PermissionRepository  $permissionRepository
     */
    public function __construct(RoleRepository $roleRepository, PermissionRepository $permissionRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * @param RoleRequest $request
     * @return Factory|View
     */
    public function index(RoleRequest $request)
    {
        $page_title = 'Administración de Perfiles';
        $page_description = 'Listado de Perfiles';

        $roles = $this->roleRepository->with('users', 'permissions')->orderBy('id')->get();

        $userRoles = [];

        foreach (Auth::user()->roles as $r) {
            $userRoles[] = $r->id;
        }

        return view('backend.auth.role.index')
            ->with('page_title', $page_title)
            ->with('page_description', $page_description)
            ->withRoles($roles)
            ->withUserRoles($userRoles);
    }

    /**
     * @param RoleRequest $request
     * @return mixed
     */
    public function create(RoleRequest $request)
    {
        $page_title = 'Administración de Perfiles';
        $page_description = "Nuevo Perfil";

        $permissions = Permission::with('module')->orderBy('permissions.id', 'ASC')->get();
        $permissions = $permissions->groupBy('module.name');

        return view('backend.auth.role.create')
            ->with('page_title', $page_title)
            ->with('page_description', $page_description)
            ->withPermissions($permissions);
    }

    /**
     * @param  RoleRequest  $request
     *
     * @return mixed
     * @throws GeneralException
     * @throws Throwable
     */
    public function store(RoleRequest $request)
    {
        $this->roleRepository->store($request->validated());

        return redirect()->route('admin.auth.role.index')->withFlashSuccess(__('El Perfil se ha creado correctamente.'));
    }

    /**
     * @param  RoleRequest  $request
     * @param  Role  $role
     *
     * @return mixed
     */
    public function edit(RoleRequest $request, Role $role)
    {
        $page_title = 'Administración de Perfiles';
        $page_description = "Modificando Perfil $role->name";

        if ($role->isSuperAdmin()) {
            return redirect()->route('admin.auth.role.index')->withFlashDanger(__('No puedes modificar el Perfil de Super Administrador.'));
        }

        $permissions = Permission::with('module')->orderBy('permissions.id', 'ASC')->get();
        $permissions = $permissions->groupBy('module.name');

        return view('backend.auth.role.edit')
            ->with('page_title', $page_title)
            ->with('page_description', $page_description)
            ->withRole($role)
            ->withRolePermissions($role->permissions->pluck('name')->all())
            ->withPermissions($permissions);
    }

    /**
     * @param RoleRequest $request
     * @param Role $role
     * @return mixed
     */
    public function show(RoleRequest $request, Role $role)
    {
        $page_title = 'Administración de Perfiles';
        $page_description = "Visualizando Perfil $role->name";

        return view('backend.auth.role.show')
            ->with('page_title', $page_title)
            ->with('page_description', $page_description)
            ->withRow($role->load('permissions', 'users'));
    }

    /**
     * @param RoleRequest $request
     * @param Role $role
     *
     * @return mixed
     * @throws GeneralException
     * @throws Throwable
     */
    public function update(RoleRequest $request, Role $role)
    {
        $this->roleRepository->update($role, $request->validated());

        return redirect()->route('admin.auth.role.edit', [$role->id])->withFlashSuccess(__('El perfil se actualizo correctamente.'));
    }

    /**
     * @param  RoleRequest  $request
     * @param  Role  $role
     *
     * @return mixed
     * @throws Exception
     */
    public function destroy(RoleRequest $request, Role $role)
    {
        $this->roleRepository->destroy($role);

        return redirect()->route('admin.auth.role.index')->withFlashSuccess(__("El perfil $role->name ha sido eliminado correctamente."));
    }
}
