<?php

namespace App\Models\World;

use App\Traits\WorldTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Continent
 */
class Continent extends Model
{
    use WorldTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_continents';

    /**
     * append names
     *
     * @var array
     */
    protected $appends = [
        'local_name',
        'local_full_name',
        'local_alias',
        'local_abbr',
    ];

    /**
     * return Countries
     */
    public function countries()
    {
        return $this->hasMany(Country::class);
    }

    public function children()
    {
        return $this->countries;
    }

    public function parent()
    {
        return null;
    }

    /**
     * return Continent locales
     */
    public function locales()
    {
        return $this->hasMany(ContinentLocale::class);
    }

    /**
     * Get Continent by name
     *
     * @param string $name
     * @return Collection
     */
    public static function getByName($name)
    {
        $localized = ContinentLocale::where('name', $name)->first();

        if (is_null($localized)) {
            return $localized;
        }

        return $localized->continent;
    }

    /**
     * Search Continent by name
     *
     * @param mixed $name
     * @return collection
     */
    public static function searchByName($name)
    {
        return ContinentLocale::where('name', 'like', "%" . $name . "%")
            ->get()->map(function ($item) {
                return $item->continent;
            });
    }
}
