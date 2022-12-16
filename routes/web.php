<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

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

Route::get('/recipes', [RecipeController::class, 'index']);

Route::get('/recipes/{id}', [RecipeController::class, 'show']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


//testing 



Route::get('/test', function () {            //takes you to page test if you are logged in - testing out authorisation with the middleware pipeline
    return "Yay, it finally works!";
})->middleware(['auth']);

Route::get('/one', function () {             //takes you to page one
    return "I have two pages now :)";
});

Route::redirect('/two', '/one');            //redirects you back to page one if you type route /two into URL

Route::get('/home/{name}', function ($name) {           //takes you to any page you type into the URL (eg localhost/home/issi returns 'Welcome back to your homepage issi!')
    return "Welcome back to your homepage $name!";
});

Route::get('user/{name?}', function ($name = null) {    //similar to above but putting something after '/user/' is optional (but will take you to a page as above if you do)
    return $name;
});
