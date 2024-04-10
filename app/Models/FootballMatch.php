<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FootballMatch extends Model
{
    use HasFactory;

    protected $table = 'match'; // Указываем модели использовать таблицу `match`

    public function goals(): HasMany
    {
        return $this->hasMany(Goals::class); 
    }
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function team1(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'id_team1');
    }

    public function team2(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'id_team2');
    }
}
