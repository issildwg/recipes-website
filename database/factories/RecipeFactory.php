<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\model-Recipe>
 */
class RecipeFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    public function definition()
    {
        $count = User::all() -> count();

//really ingredients needs to be an array of integers and words
        return [
            'title' => fake() -> word(),
            'ingredients' => fake() -> sentence(),
            'recipe' => fake() -> sentence(),
            'user_id' => fake() -> numberBetween(1, $count),     //hardcoding number of users - figure out how to make  - use tinker - get full array of databas - get row number
        ];
    }
}
// App\Models\User::count()