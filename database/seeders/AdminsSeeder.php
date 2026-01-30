<?php
namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    public function run(): void
    {
        Admins::insert([
            [
                'admin_name'  => 'Aryajaya Alamsyah',
                'email'       => 'aseanhub.alamsyah@gmail.com',
                'password'    => Hash::make('12341234'),
                'status_data' => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'admin_name'  => 'Admin Asean HUB',
                'email'       => 'admin.aseanhub@gmail.com',
                'password'    => Hash::make('12341234'),
                'status_data' => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
        ]);
    }
}
