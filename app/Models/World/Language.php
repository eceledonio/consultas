<?php

namespace App\Models\World;

use App\Traits\WorldTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Language.
 */
class Language extends Model
{
    use WorldTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_languages';
}
