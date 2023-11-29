<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seller;
use Faker\Factory as Faker;

class sellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<=100;$i++){
            $seller = new Seller;
            $seller->seller_name=$faker->name ;
            $seller->seller_email=$faker->email;
            $seller->address=$faker->address;
            $seller->save();
        }

    }
}
