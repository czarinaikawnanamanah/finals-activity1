<?php

namespace Database\Factories;

use App\Models\Hangman;
use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class HangmanFactory extends Factory
{
    protected $model = Hangman::class;

    public function definition()
    {
        return [
            'player_id' => Player::factory(),
            'score' => $this->faker->numberBetween(0, 100),
        ];
    }
}
