<?php

namespace App\Models\Auth\Traits\Method;

use Illuminate\Support\Collection;

/**
 * Trait UserMethod.
 */
trait UserMethod
{
    /**
     * @return mixed
     */
    public function canChangeEmail()
    {
        return config('boilerplate.access.user.change_email');
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
    public function isVerified(): bool
    {
        return $this->email_verified_at !== null;
    }

    /**
     * @return bool
     */
    public function isSocial(): bool
    {
        return $this->provider && $this->provider_id;
    }

    /**
     * @return Collection
     */
    public function getPermissionDescriptions(): Collection
    {
        return $this->permissions->pluck('description');
    }

    /**
     * @param  bool $size
     *
     * @return mixed|string
     */
    public function getPicture($size = null)
    {
        if (! empty($this->avatar)) {
            return url('uploads/avatars/'. $this->avatar);
        } else {
            return 'https://gravatar.com/avatar/'.md5(strtolower(trim($this->email))).'?s='.config('boilerplate.avatar.size', $size).'&d=mp';
        }
    }

    /**
     * @return mixed
     */
    public function isSuperAdmin()
    {
        return $this->hasRole(config('boilerplate.access.role.super_admin'));
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

        return $this->hasRole(config('boilerplate.access.role.admin'));
    }
}
