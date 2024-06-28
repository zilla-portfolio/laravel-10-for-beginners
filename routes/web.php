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
    return view('welcome');
});

/*
// Zilla Notation:
// Another way to set up a Route to a view is to replace "get" for "view"
// and place the path and the view name, separated by comma, like the example below:
Route::view('/', 'home');
*/