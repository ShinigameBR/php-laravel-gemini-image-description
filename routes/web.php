<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiImageController;

Route::get('/', 'App\Http\Controllers\GeminiImageController@home')->name('home');
Route::post('/describe-image', 'App\Http\Controllers\GeminiImageController@describe')->name('describe-image');
