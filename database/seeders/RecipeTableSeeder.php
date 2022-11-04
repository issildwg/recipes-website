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
    public function run()       //hardcode in a recipe here
    {
        $Egg = new Recipe;
        $Egg->ingredients = "egg";
        $Egg->recipe = "Salt the egg and enjoy";
        $Egg->save();
    }
}
