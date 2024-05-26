<?php

namespace Database\Seeders;

use App\Models\Room;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Occupant;
use App\Models\RoomOccupant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Abdyunior',
            'email' => 'abdyunior@example.com',
            'password' => bcrypt('qwert123'),
            'email_verified_at' => now(),
        ]);

        // Seed 7 Room instances
        $rooms = Room::factory()->count(7)->create();

        // Seed 7 Occupant instances
        $occupants = Occupant::factory()->count(7)->create();

        // Seed 7 RoomOccupant instances
        foreach ($rooms as $room) {
            RoomOccupant::factory()->create([
                'room_id' => $room->id,
                'occupant_id' => $occupants->random()->id,
            ]);
        }
    }
}
