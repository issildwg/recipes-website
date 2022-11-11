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

        return [
            //missing user id and recipe id (same with recipe) - copy hardcode
            //words and sentences - should be arrays - figure this out gorl
            'title' => fake() -> word(),
            'ingredients' => fake() -> word(),
            'recipe' => fake() -> sentence(),
            'user_id' => 6, //fake() -> unique() -> numberBetween(0,4),     //hardcoding number of users - figure out how to make dynamic

          //  'id' => fake()->unique()->id()
        ];
    }
}
