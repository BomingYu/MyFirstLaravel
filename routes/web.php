<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return 'hi';
    return view('welcome');
});

Route::get('/about', [\App\Http\Controllers\WelcomeController::class, 'aboutPage']);

Route::get('/cat', function(){
    return 'this is the cat page';
});

Route::get('/cat/{id}/{name}', function($id,$name){
     return 'this is the cat '.$id.', the name is '.$name;
});

Route::get('/controllerFunction', [\App\Http\Controllers\WelcomeController::class, 'controllerTry']);

Route::get('/listPageShow', [\App\Http\Controllers\WelcomeController::class,'listShownPage']);
