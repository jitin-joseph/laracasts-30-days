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

Route::get('/about',function(){
    //return 'About Page'; //return a string
    //return ['foo' => 'bar']; //return an array in json { "foo": "bar"}
    return view('about'); //return a view page
});

Route::get('/contact', function () {
    return view('contact');
});