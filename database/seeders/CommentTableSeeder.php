<?php

namespace Database\Seeders;
use App\Models\Comment;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $C1=new Comment;
        $C1->comment = "recipe too simple :(";
        $C1->user_id = 1;
        $C1->recipe_id = 5;
        $C1->save();
    }
}
