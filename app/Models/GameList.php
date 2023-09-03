<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GameList extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gamelist';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $guarded = ['hanbaisuu', 'median2', 'galge', 'elfics', 'gyutto_enc', 'erogetrailers', 'twitter_search', 'tgfrontier', 'gamemeter', 'twitter_data_widget_id', 'twitter_data_widget_id_before', 'twitter_data_widget_id_official', 'dlsite_rental'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(BrandList::class, 'brandname', 'id');
    }

    public function creaters(): HasMany
    {
        return $this->hasMany(Shokushu::class, 'game', 'id');
    }

    public function modGames(): HasMany
    {
        return $this->hasMany(ModGameList::class, 'game', 'id');
    }
}
