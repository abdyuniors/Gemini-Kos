<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Occupant>
 */
class OccupantFactory extends Factory
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
            'name' => $this->faker->name, // Generates a random name
            'email' => $this->faker->unique()->safeEmail, // Generates a unique email
            'phone' => $this->faker->unique()->phoneNumber, // Generates a unique phone number
        ];
    }
}
