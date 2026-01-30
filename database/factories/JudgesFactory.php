<?php
namespace Database\Factories;

use App\Models\Judges;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class JudgesFactory extends Factory
{
    // ...
    protected $model = Judges::class;

    public function definition(): array
    {
        // set lokasi indonesia.
        $this->faker = \Faker\Factory::create('id_ID');

        // pastikan folder ada
        Storage::disk('public')->makeDirectory('judges');

        // generate unique filename
        $judges_photo = 'judges/' . Str::uuid() . '.webp';

        Storage::disk('public')->put(
            $judges_photo, file_get_contents(database_path('seeders/files/judges_photo/example-judges.webp'))
        );

        return [
            'judges_name'        => $this->faker->name(),
            'origin_country'     => $this->faker->randomElement([
                'Brunei Darussalam',
                'Cambodia',
                'Indonesia',
                'Laos',
                'Malaysia',
                'Myanmar',
                'Philippines',
                'Singapore',
                'Thailand',
                'Vietnam',
                'Other Country',
            ]),
            'origin_institution' => $this->faker->randomElement([
                'IPB University',
                'Institut Teknologi Bandung',
                'Universitas Indonesia',
                'Universitas Gajah Mada',
                'University of Ghent',
            ]),
            'judges_task'        => $this->faker->randomElement([
                'Assessment One',
                'Assessment Two',
                'Final Assessment',
            ]),
            'judges_photo'       => $judges_photo,
            'email'              => $this->faker->unique()->safeEmail(),
            'password'           => Hash::make('12341234'),
            'status_data'        => 'Active',
        ];
    }
}
