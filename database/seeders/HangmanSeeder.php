<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hangman;

class HangmanSeeder extends Seeder
{
    public function run()
    {
        Hangman::factory(30)->create();
    }
}
