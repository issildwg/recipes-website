<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'recipe_id'];
    
    public function commentableUser()
    {
        return $this->belongsTo('App\User');
    }

    public function commentableRecipe()
    {
        return $this->belongsTo('App\Recipe');
    }
}
