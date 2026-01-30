<?php
namespace Database\Seeders;

use App\Models\Participants;
use Illuminate\Database\Seeder;

class ParticipantsSeeder extends Seeder
{
    public function run(): void
    {
        Participants::factory()->count(30)->create();
    }
}
