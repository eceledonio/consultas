<?php

namespace App\Models\World;

use Illuminate\Database\Eloquent\Model;

/**
 * Continent Locale
 */
class ContinentLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_continents_locale';

    /**
     * return belonged Continent
     */
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }
}
