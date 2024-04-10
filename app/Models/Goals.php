<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    use HasFactory;

    protected $table = 'goal';
    public function match()
    {
        return $this->belongsTo(FootballMatch::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
