<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController; // Import the controller

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('kriteria', KriteriaController::class);