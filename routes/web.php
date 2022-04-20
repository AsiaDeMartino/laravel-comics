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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    $comics = config("comics");

    return view('main', ["comics" => $comics]);
});

Route::get('/details/{id}', function ($id) {
    $comics = config("comics");

    abort_if(!isset($comics[$id]),404);    
    return view('details', ["comics" => $comics[$id]]);
})->where('id','[0-9]+');
