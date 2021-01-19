<?php

namespace App\Traits\General;

/**
 * Class GlobalMethodTrait.
 */
trait GlobalMethodTrait
{
    /**
     * @return bool
     */
    public function isActivo(): bool
    {
        return $this->activo;
    }

    /**
     * @return bool
     */
    public function isInactivo(): bool
    {
        return ! $this->activo;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @return bool
     */
    public function isInactive(): bool
    {
        return ! $this->active;
    }

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return $this->default;
    }

    /**
     * @return bool
     */
    public function isSelected(): bool
    {
        return $this->selected;
    }

    /**
     * @return bool
     */
    public function isSuperAdmin(): bool
    {
        return $this->hasRole(config('boilerplate.access.role.super_admin'));
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        $superAdminCheck = $this->isSuperAdmin();

        if ($superAdminCheck === true) {
            return true;
        }

        return $this->hasRole(config('boilerplate.access.role.admin'));
    }
}
