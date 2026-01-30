<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminsSeeder::class,
            JudgesSeeder::class,
            ParticipantsSeeder::class,
            VotersSeeder::class,
            UrbanDesignSeeder::class,
        ]);
    }
}
