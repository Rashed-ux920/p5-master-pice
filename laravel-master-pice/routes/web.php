<?php

use App\Http\Controllers\getincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signin.php', [getincontroller::class, 'signin']);
Route::get('/login.php', [getincontroller::class, 'login']);
Route::get('/index.php', [getincontroller::class, 'index']);
