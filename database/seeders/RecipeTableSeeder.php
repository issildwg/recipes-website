<?php

namespace Database\Seeders;
use App\Recipe;

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
        $Egg->ingredients('egg','salt');            //this will definitely cause some issues
        $Egg->recipe('salt the egg and enjoy');
        $Egg->save();
    }
}
