<?php
namespace Database\Factories;

use App\Models\Participants;
use App\Models\UrbanDesign;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UrbanDesignFactory extends Factory
{
    protected $model = UrbanDesign::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('id_ID');

        // pastikan folder ada
        Storage::disk('public')->makeDirectory('urban_design/images');
        Storage::disk('public')->makeDirectory('urban_design/presentations');

        // generate unique filename
        $image1 = 'urban_design/images/' . Str::uuid() . '.webp';
        $image2 = 'urban_design/images/' . Str::uuid() . '.webp';
        $image3 = 'urban_design/images/' . Str::uuid() . '.webp';
        $ppt    = 'urban_design/presentations/' . Str::uuid() . '.pptx';

        // copy file template
        Storage::disk('public')->put(
            $image1,
            file_get_contents(database_path('seeders/files/images/example-images-1.webp'))
        );

        Storage::disk('public')->put(
            $image2,
            file_get_contents(database_path('seeders/files/images/example-images-2.webp'))
        );

        Storage::disk('public')->put(
            $image3,
            file_get_contents(database_path('seeders/files/images/example-images-3.webp'))
        );

        Storage::disk('public')->put(
            $ppt,
            file_get_contents(database_path('seeders/files/presentations/example-ppt.pptx'))
        );

        return [
            // 'id_participants'     => Participants::inRandomOrder()->first()->id_participants,                // Select *
            // 'id_participants'     => Participants::query()->inRandomOrder()->value('id_participants'),       // Select id_participans
            # -----------------------------------------------------------------------------------------------------------
            //'id_participants'     => Participants::query()->inRandomOrder()->value('id_participants'),
            'design_title'        => $this->faker->sentence(4),
            'design_description'  => collect(range(1, rand(3, 4)))->map(
                fn() => implode(' ', $this->faker->sentences(rand(8, 10))))->implode("\n\n"),
            'design_presentation' => $ppt,
            'images_1'            => $image1,
            'images_2'            => $image2,
            'images_3'            => $image3,
            'videos_1'            => 'https://www.youtube.com/watch?v=zyJJ0MKW-m0',
            'videos_2'            => 'https://www.youtube.com/watch?v=5qiRrJ7Vnpw',
            'videos_3'            => 'https://www.youtube.com/watch?v=UlcmZBhp2OA',
            'status_data'         => 'Active',
        ];
    }
}
