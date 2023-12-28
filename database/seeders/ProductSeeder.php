<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
           'name' => "Iphone 13",
           'description'=> "movile Iphone Apple",
           'amount'=>900 
        ]);
        DB::table("products")->insert([
           'name' => "Iphone 11",
           'description'=> "tablet Iphone Apple",
           'amount'=>800 
        ]);
        DB::table("products")->insert([
           'name' => "PlaySatation 5",
           'description'=> "Video Console",
           'amount'=> 1500
        ]);
    }
}
