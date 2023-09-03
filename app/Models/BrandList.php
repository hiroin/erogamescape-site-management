<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BrandList extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'brandlist';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $guarded = ['makername', 'makerfurigana', 'directlink', 'twitter_data_widget_id', 'erogetrailers'];

    public function games(): HasMany
    {
        return $this->hasMany(GameList::class, 'brandname', 'id');
    }
}
