<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    
    public function commentableUser()
    {
        return $this->belongsTo('App\User');
    }

    public function commentableRecipe()
    {
        return $this->belongsTo('App\Recipe');
    }
}
