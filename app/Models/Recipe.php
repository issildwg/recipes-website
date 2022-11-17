<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id'];

        //gets all of the posts comments
    public function comments() {
        //relates comment to recipe - recipe can have many comments
        //first arg is the final model we wish to access, the second is the name of the intermediate model - as this is technically the interme
        return $this->hasMany('App\Comment', 'commentableRecipe'); //commentableRecipe is a method in Comment.php that links a comment to a recipe
    }


    //links recipes to user 
    public function postable()
    {
        return $this->belongsTo('App\User');
    }  
}
