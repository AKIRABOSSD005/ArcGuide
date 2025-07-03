<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/spots', function () {
    return view('spots');
});
Route::get('/spots', [SpotController::class, 'spots']);


Route::get('/maps', function () {
    return view('maps');
});

Route::get('/events', function () {
    return view('events');
});