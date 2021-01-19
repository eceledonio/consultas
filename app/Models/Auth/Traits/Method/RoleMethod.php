<?php

namespace App\Models\Auth\Traits\Method;

/**
 * Trait RoleMethod.
 */
trait RoleMethod
{
    /**
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->name === config('boilerplate.access.role.super_admin');
    }

    /**
     * @return mixed
     */
    public function isAdmin()
    {
        $superAdminCheck = $this->isSuperAdmin();

        if ($superAdminCheck === true) {
            return true;
        }

        return $this->name === config('boilerplate.access.role.admin');
    }
}
