<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer; // Pastikan Anda mengimpor model Customer

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 10 data Customer
        Customer::factory()->count(10)->create();

        // Membuat satu data User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
