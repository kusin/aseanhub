<?php
namespace Database\Seeders;

use App\Models\Participants;
use App\Models\UrbanDesign;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UrbanDesignSeeder extends Seeder
{
    public function run(): void
    {
        // Storage::disk('public')->deleteDirectory('urban_design');
        // UrbanDesign::factory()->count(30)->create();

        Storage::disk('public')->deleteDirectory('urban_design');

        // ambil semua participant aktif
        $participants = Participants::where('status_data', 'Active')->get();
        foreach ($participants as $participant) {

            // upload desain pertama (WAJIB)
            UrbanDesign::factory()->create([
                'id_participants' => $participant->id_participants,
            ]);

            // 30% participant kirim 2 desain (bukan revisi)
            if (rand(1, 100) <= 30) {
                UrbanDesign::factory()->create([
                    'id_participants' => $participant->id_participants,
                ]);
            }

            // tandai participant sudah upload
            $participant->update([
                'status_urban_design' => 'Completed',
            ]);
        }
    }
}
