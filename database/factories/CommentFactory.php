<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\model-Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'comment' => fake() -> text(200),
            'user_id' => 6, //fake() -> numberBetween(0,4),  //hardcoding number of users - figure out how to make dynamic
            'recipe_id' => 5, //fake() -> unique() -> numberBetween(0,4),     //hardcoding number of users - figure out how to make dynamic
        ];
    }
}
