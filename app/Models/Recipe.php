<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

        //gets all of the posts comments
    public function comments() {
        //relates comment to recipe - recipe can have many comments
        //first arg is the final model we wish to access, the second is the name of the intermediate model - as this is technically the interme
        return $this->morphMany('App\Comment', 'commentable'); //commentable is a method in Comment.php
   
         //but could also be:
         //    return $this->morphMany(Comment::class); 

    }



        //links recipes to user 
    public function postable()
    {
        return $this->morphTo();
    }
}
