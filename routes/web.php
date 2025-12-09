<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('home');
});
Route::post('/', function () {
    return "hoi";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/newposttekst', function () {
    return view('newposttekst');
});

Route::resource('posts', PostController::class);