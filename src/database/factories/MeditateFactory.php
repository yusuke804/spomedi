<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meditate>
 */
class MeditateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'meditate_time' => '1:00:00',
            'user_id' => 1,
            'meditate_genre_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
