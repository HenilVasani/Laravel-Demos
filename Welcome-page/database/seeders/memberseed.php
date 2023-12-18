<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\member;
use Faker\Factory as Faker;

class memberseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Change this line
        for ($i = 0; $i <= 50; $i++) {
            $data = new member;
            $data->first_name = $faker->firstName; // Use firstName instead of firstName
            $data->last_name = $faker->lastName;
            $data->gender = $faker->randomElement(['male', 'female']);
            $data->save();
        }
    }
}
