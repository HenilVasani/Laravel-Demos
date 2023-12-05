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
            $seller->name=$faker->name ;
            $seller->email=$faker->email;
            $seller->password=$faker->password;
            $seller->subscription_expiry="2023-12-10 11:54:06";
            $seller->save();
        }

    }
}
