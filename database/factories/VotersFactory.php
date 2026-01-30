<?php
namespace Database\Factories;

use App\Models\Voters;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class VotersFactory extends Factory
{
    // ...
    protected $model = Voters::class;

    public function definition(): array
    {
        // set lokasi indonesia.
        $this->faker = \Faker\Factory::create('id_ID');

        return [
            'voters_name'    => $this->faker->name(),
            'voters_country' => $this->faker->randomElement([
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
            'ip_address'     => $this->faker->ipv4(),
            'mac_address'    => $this->faker->macAddress(),
            'email'          => $this->faker->unique()->safeEmail(),
            'password'       => Hash::make('12341234'),
        ];
    }
}
