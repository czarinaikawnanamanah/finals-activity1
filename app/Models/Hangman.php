<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hangman extends Model
{
    use HasFactory;

    protected $fillable = ['player_id', 'score'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
