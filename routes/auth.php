<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
return view('auth.signin');
})->name('login');

Route::get('/register', function () {
return view('auth.signup');
})->name('register');

Route::get('/logout', function () {
Auth::logout();
return view('auth.signin');
})->name('logout');

