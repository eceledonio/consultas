<?php

namespace App\Models\Auth;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Module.
 */
class Module extends Model implements Recordable
{
    use RecordableTrait;

    protected $table = 'modules';

    public function permissions()
    {
        $this->hasMany(Permission::class);
    }
}
