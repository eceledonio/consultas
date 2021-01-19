<?php

namespace App\Repositories\Auth;

use App\Models\Auth\Permission;
use App\Repositories\BaseRepository;

/**
 * Class PermissionRepository.
 */
class PermissionRepository extends BaseRepository
{
    /**
     * PermissionRepository constructor.
     *
     * @param  Permission  $permission
     */
    public function __construct(Permission $permission)
    {
        $this->model = $permission;
    }
}
