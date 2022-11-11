<?php

namespace Database\Factories;

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

//really ingredients needs to be an array of integers and words
        return [
            'title' => fake() -> word(),
            'ingredients' => fake() -> sentence(),
            'recipe' => fake() -> paragraph(),
            'user_id' => 6, //fake() -> unique() -> numberBetween(0,4),     //hardcoding number of users - figure out how to make dynamic
        ];
    }
}
