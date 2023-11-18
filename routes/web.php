<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return "Hello From RCOEM";
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::view('/contact', 'contact', [
    "name" => "Pranay"
]);
Route::get('/person/{name}', function($name){
    return "The name is $name.";
});
Route::get('/person/{name?}', function(?string $name = 'Pranay Rokade(DEFAULT)'){
    return "The name is $name.";
})->name('person');

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('profile');

Route::get(
    '/contact',
    [HomeController::class, 'contact']
)->name('contact');

