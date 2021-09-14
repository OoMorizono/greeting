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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/controller/comments/{time}', [App\Http\Controllers\GreetingController::class, 'comments']);
Route::get('/controller/freeword/{free}', [App\Http\Controllers\GreetingController::class, 'freeword']);
Route::get('/controller/random', [App\Http\Controllers\GreetingController::class, 'random']);
