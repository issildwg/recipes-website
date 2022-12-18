<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

        //mass asigns user names to the user db - shoudnt add these to the other tho as they are admin basis models 
    protected $fillable = ['id', 'user_id', 'name', 'password', 'email'];

        //The attributes that should be hidden for serialization.
    protected $hidden = ['password', 'remember_token',];


        //links the posts and comments to this
    public function recipes(){
        return $this->hasMany('App\Models\Recipe', 'postable');      //postable and is a method in Recipe.php
    }

    public function comments(){
        return $this->hasMany('App\Model\Comment', 'commentableUser'); //commentableUser is a method in Comment.php that links a comment to a user
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
