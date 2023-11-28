<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seller;

class sellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seller = new Seller;
        $seller->seller_name="nehil";
        $seller->seller_email="nehil@gmail.com";
        $seller->address="hjkghjkgh";
        $seller->save();
    }
}
