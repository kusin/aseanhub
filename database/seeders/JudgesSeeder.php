<?php
namespace Database\Seeders;

use App\Models\Judges;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class JudgesSeeder extends Seeder
{
    public function run(): void
    {
        Storage::disk('public')->deleteDirectory('judges');
        Judges::factory()->count(15)->create();
    }
}
