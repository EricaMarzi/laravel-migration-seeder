<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->word(),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'train_code' => fake()->randomNumber(4, true),
            'carriage_numb' => fake()->randomDigitNotNull(),
            'is_on_time' => fake()->boolean(),
            'is_deleted' => fake()->boolean(),
            'price' => fake()->randomFloat(2, 2, 999),
        ];
    }
}
