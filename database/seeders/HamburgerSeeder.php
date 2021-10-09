<?php

namespace Database\Seeders;

use App\Models\Hamburger;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HamburgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hamburgers')->insert([
            'code' => "classic",
            'name' => "Classic Burger",
            'image' => "classic",
        ]);


        $hamburgerValues = [
            'code' => "chicken",
            'name' => "Chicken Burger",
            'image' => "chicken",
        ];
        DB::table('hamburgers')->insert($hamburgerValues);


        Hamburger::create([
            'code' => "cheese",
            'name' => "Cheeseburger",
            'image' => "cheese",

        ]);

        
        $newHamburger = new Hamburger();
        $newHamburger->code = "steak";
        $newHamburger->name = "Steak Burger";
        $newHamburger->image = "steak";
        $newHamburger->save();




    }
}
