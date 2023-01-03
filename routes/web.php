<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

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

Route::get('/recipes', [RecipeController::class, 'index'])
    ->name('recipes.index');

//      create recipe forms
Route::get('recipes/create', [RecipeController::class, 'create'])
    ->name('recipes.create');

Route::post('recipes', [RecipeController::class, 'store'])
    ->name('recipes.store');

Route::get('/recipes/{id}', [RecipeController::class, 'show'])
    ->name('recipes.show'); //this bit helps with the linking
    

Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');





Route::get('/users/{id}', [UserController::class, 'show'])
    ->middleware(['auth', 'verified']) ->name('users.show');
        
Route::delete('recipes/{id}', [RecipeController::class, 'destroy'])
    ->name('recipes.destroy');



//Auth::routes();
Route::get('/login', [AuthenticatedSessionController::class, 'login'])
    ->name('login');    //this takes you to dashboard - redirect to recipes or profile?

Route::get('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'logout'])
    ->name('logout');

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('home');    //the middleware bit makes you have to log in

Route::get('/dashboard', function () { 
    return view('dashboard');         
})->middleware(['auth', 'verified']) -> name('dashboard');


require __DIR__.'/auth.php';


/* usefull links
    localhost/register
*/


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
