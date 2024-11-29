<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'username', 'email', 'password', 'student_id_number', 'section_id'
    ];

    public function hangman()
    {
        return $this->hasMany(Hangman::class);
    }
}
