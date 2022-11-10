<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function commentable()
    {
        return $this->morphOne('App\Recipe', 'postable');
    }   // is it this or    return $this->morphTo();

    /*
    public function commentableUser()
    {
        return $this->belongsTo(User::class);
    }

    public function commentableRecipe()
    {
        return $this->belongsTo(Recipe::class);
    }*/
}
