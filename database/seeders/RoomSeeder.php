<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            ['room_number' => 101, 'level' => 'reguler', 'available' => true],
            ['room_number' => 102, 'level' => 'reguler', 'available' => true],
            ['room_number' => 103, 'level' => 'reguler', 'available' => true],
            ['room_number' => 104, 'level' => 'reguler', 'available' => true],
            ['room_number' => 105, 'level' => 'reguler', 'available' => true],
            ['room_number' => 106, 'level' => 'reguler', 'available' => true],
            ['room_number' => 201, 'level' => 'vip', 'available' => true],
            ['room_number' => 202, 'level' => 'vip', 'available' => true],
            ['room_number' => 203, 'level' => 'vip', 'available' => true],
            ['room_number' => 204, 'level' => 'vip', 'available' => true],
        ];

        DB::table('rooms')->insert($rooms);
    }
}
