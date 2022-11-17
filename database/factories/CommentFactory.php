<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Recipe;

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
        $count = User::all() -> count();
        $countr = Recipe::all() -> count();

        return [
            'comment' => fake() -> text(200),
            'user_id' => fake() -> numberBetween(1, $count),  //hardcoding number of users - figure out how to make dynamic
            'recipe_id' => fake() -> numberBetween(1, $countr),     //hardcoding number of recipes - figure out how to make dynamic
        ];
    }
}
// App\Models\User::count()