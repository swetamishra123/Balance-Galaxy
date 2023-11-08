<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CgpaController;




Route::get('/', function () {
    return view('welcome'); 
});
Route::get('/game', function () {
    return view('game'); 
});
Route::get('/music', function () {
    return view('music'); 
});


Route::get('/quiz', function () {
    return view('quiz'); 
});
Route::get('/photogallery', function () {
    return view('photogallery'); 
});

Route::get('/cgpa', [CgpaController::class, 'index']);
Route::post('/cgpa/calculate', [CgpaController::class, 'calculate']);


Route::get('/waterintake', function () {
    return view('waterintake'); 
});
Route::get('/todo', function () {
    return view('todo'); 
});