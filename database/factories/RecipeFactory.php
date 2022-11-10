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
            'ingredients' => fake() -> ingredients(),
            'title' => fake() -> title(),
            'recipe' => fake() -> recipe(),
            'id' => fake()->unique()->id()
        ];
    }
}
