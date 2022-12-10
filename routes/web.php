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
    return view('welcome1');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name("contact.Route");

Route::get('/test-bootstrap', function () {
    return view('bootstrap');
})->name("bootstrap");

// panggil route, :: method get(), didalam get ada string penamaan routting, 
// function(){
//     $a = 0;
//     return $a
// }
Route::get('/hello-world', function(){
    $a = "Hello world" . 1;
    return $a;
});
