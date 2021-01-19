<?php

namespace App\Models\World;

use Illuminate\Database\Eloquent\Model;

/**
 * City
 */
class CityLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_cities_locale';

    /**
     * return belonged City
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
