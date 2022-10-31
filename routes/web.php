<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {       // this should return the home page
    return view('welcome');
    /*  -display all recipes - alphabetically
        -have menu?
        -user profile
        -search recipes
        -sign up to email list??  
    */
});

Route::redirect('/home', '/');            //redirects you back to home page if you type route /home into URL



Route::get('/home/{name}', function ($name) {           //takes users to their profile home (so typing localhost/home/issi takes me back to my profile returns 'Welcome back to your homepage issi!')
    return "Welcome back to your homepage $name!";
    /* displays :
        -user details
        -user settings (to update details)
        -recipes posted
        -comments posted??
        -saved recipes
    */
});


Route::get('/recipe/{name}', function ($name) {           //takes users to specific recipes
    return "$name";
    /* displays :
        -recipe details
        -user who posted recipe
        -comments on post 
    */
});