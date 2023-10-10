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

Route::get('/admin', function (){
    return view('admin.index');
})->name('admin');

Route::resource('/users', \App\Http\Controllers\UsersController::class);
Route::resource('/roles', \App\Http\Controllers\RoleController::class);
Route::resource('/permissions', \App\Http\Controllers\PermissionController::class);


Route::get('/404', function (){
    return view('admin.404');
})->name('404');

Route::get('/blank', function (){
    return view('admin.blank');
})->name('blank');

Route::get('/button', function (){
    return view('admin.button');
})->name('button');

Route::get('/chart', function (){
    return view('admin.chart');
})->name('chart');

Route::get('/element', function (){
    return view('admin.element');
})->name('element');

Route::get('/form', function (){
    return view('admin.form');
})->name('form');

Route::get('/signin', function (){
    return view('admin.signin');
})->name('signin');

Route::get('/signup', function (){
    return view('admin.signup');
})->name('signup');

Route::get('/table', function (){
    return view('admin.table');
})->name('table');

Route::get('/typography', function (){
    return view('admin.typography');
})->name('typography');

Route::get('/widget', function (){
    return view('admin.widget');
})->name('widget');
