<?php

namespace Database\Seeders;
use App\Models\Recipe;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Egg = new Recipe;
        $Egg->id = 1;
        $Egg->user_id = 1;
        $Egg->title = "EGGS!!"; 
        $Egg->ingredients = "egg";
        $Egg->recipe = "idk mash it?";
        $Egg->save();

            //recipe factory
        \App\Models\Recipe::factory(3)->create();
    }
}
