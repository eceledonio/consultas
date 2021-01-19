<?php

namespace App\Traits\General;

/**
 * Class GlobalScopeTrait.
 */
trait GlobalScopeTrait
{
    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeActivo($query, $status = true)
    {
        return $query->where('activo', $status);
    }

    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeInactivo($query, $status = false)
    {
        return $query->where('activo', $status);
    }

    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeActive($query, $status = true)
    {
        return $query->where('active', $status);
    }

    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeInactive($query, $status = false)
    {
        return $query->where('active', $status);
    }

    /**
     * @param $query
     * @param bool $status
     * @return mixed
     */
    public function scopeSelected($query, $status = true)
    {
        return $query->where('selected', $status);
    }

    /**
     * @param $query
     * @param bool $status
     * @return mixed
     */
    public function scopeDefault($query, $status = true)
    {
        return $query->where('default', $status);
    }

    /**
     * @param $query
     * @param string $orderBy
     * @param string $sort
     * @return mixed
     */
    public function scopeOrder($query, $orderBy = 'id', $sort = 'asc')
    {
        return $query->orderBy($orderBy, $sort);
    }
}
