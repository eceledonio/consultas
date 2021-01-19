<?php

namespace App\Models\World;

use Illuminate\Database\Eloquent\Model;

/**
 * Division Locale
 */
class DivisionLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_divisions_locale';

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
