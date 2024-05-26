<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::random(3), // Generates a random string of 3 characters
            'facilities' => 'Air PAM, Kamar Mandi Dalam', // Fixed value for facilities
            'price' => 350000, // Fixed value for price
            'status' => $this->faker->randomElement(['Tersedia', 'Ditempati']),
        ];
    }
}
