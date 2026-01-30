<?php
namespace Database\Factories;

use App\Models\Participants;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ParticipantsFactory extends Factory
{
    protected $model = Participants::class;
    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('id_ID');

        return [
            'team_name'               => $this->faker->company,
            'participants_name_1'     => $this->faker->name,
            'participants_name_2'     => $this->faker->optional()->name,
            'participants_name_3'     => $this->faker->optional()->name,
            'participants_name_4'     => $this->faker->optional()->name,
            'participants_name_5'     => $this->faker->optional()->name,
            'participants_country'    => $this->faker->randomElement([
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
            'participants_phone'      => $this->faker->numerify('08##-####-####'),
            'status_registration'     => 'Completed',
            'status_urban_design'     => 'Completed',
            'status_assessment_one'   => 'Pending',
            'status_assessment_two'   => 'Pending',
            'status_final_assessment' => 'Pending',
            'email'                   => $this->faker->unique()->safeEmail(),
            'password'                => Hash::make('12341234'),
        ];
    }
}
