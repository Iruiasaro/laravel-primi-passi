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
    return view('home', [
        "name" => "Jeffrey",
        "surname" => "Lebowski",
        "alias" => "Drugo"
    ]);    
});


Route::get('/page1', function () {
    return view('page1',[
        "name" => "Jeffrey",
        "surname" => "Lebowski",
        "alias" => "Drugo"
    ]);    
})->name("page1");

