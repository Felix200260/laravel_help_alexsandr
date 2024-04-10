<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;
    protected $table = 'team';  // Указываем, что модель должна использовать таблицу `team`

    public function users(): HasMany
    {
        return $this->hasMany(User::class);  // Исправлено на hasMany
    }

    public function matches(): HasMany
    {
        return $this->hasMany(FootballMatch::class, 'id_team1');  // Исправлено на hasMany
    }

    public function awayMatches(): HasMany
    {
        return $this->hasMany(FootballMatch::class, 'id_team2');
    }

    public function goals(): BelongsToMany
    {
        return $this->belongsToMany(Goals::class, 'user_goals', 'team_id', 'goal_id');  // Исправлено на belongsToMany и добавлены поля
    }
}
