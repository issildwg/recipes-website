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
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function commentableRecipe()
    {
        return $this->belongsTo('App\Models\Recipe', 'recipe_id');
    }
}
