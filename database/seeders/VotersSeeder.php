<?php
namespace Database\Seeders;

use App\Models\Voters;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class VotersSeeder extends Seeder
{
    public function run(): void
    {
        Voters::factory()->count(30)->create();
    }
}
