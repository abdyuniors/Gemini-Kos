<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomOccupant>
 */
class RoomOccupantFactory extends Factory
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
            'room_id' => null, // Placeholder for room_id, to be provided during seeding
            'occupant_id' => null, // Placeholder for occupant_id, to be provided during seeding
            'entry_date' => $this->faker->date(),
            'exit_date' => $this->faker->date(),
        ];
    }
}
