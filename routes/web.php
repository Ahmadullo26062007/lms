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
Route::resource('/students', \App\Http\Controllers\StudentController::class);
Route::resource('/teachers', \App\Http\Controllers\TeachersController::class);
Route::resource('/courses', \App\Http\Controllers\CourseController::class);
Route::resource('/subjects', \App\Http\Controllers\SubjectController::class);
Route::resource('/messages', \App\Http\Controllers\MessageController::class);
Route::resource('/expenses', \App\Http\Controllers\ExpenseController::class);
Route::resource('/salaries', \App\Http\Controllers\SalaryController::class);
Route::resource('/student_payments', \App\Http\Controllers\StudentPaymentController::class);
Route::resource('/teacher_payments', \App\Http\Controllers\TeachersSalaryController::class);





Route::get('/front-courses', function (){
    return view('frontend.courses');
})->name('front_courses');

Route::get('/front-expenses', function (){
    return view('frontend.expenses');
})->name('front_expenses');

Route::get('/front-messages', function (){
    return view('frontend.messages');
})->name('front_messages');

Route::get('/front-salaries', function (){
    return view('frontend.salaries');
})->name('front_salaries');

Route::get('/front-students', function (){
    return view('frontend.students');
})->name('front_students');

Route::get('/front-subjects', function (){
    return view('frontend.subjects');
})->name('front_subjects');

Route::get('/front-teachers', function (){
    return view('frontend.teachers');
})->name('front_teachers');

@include('auth.php');

Route::get('/404', function (){
    return view('admin.404');
})->name('404');
