<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shokushu extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shokushu';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $guarded = ['note', 'timestamp'];

    public function gameRelation(): BelongsTo
    {
        return $this->belongsTo(GameList::class, 'game', 'id');
    }

    public function createrRelation(): BelongsTo
    {
        return $this->belongsTo(CreaterList::class, 'creater', 'id');
    }
}
