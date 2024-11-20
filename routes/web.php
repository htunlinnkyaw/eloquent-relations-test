<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/member', MemberController::class);
Route::resource('/house', HouseController::class);
Route::resource('/owner', OwnerController::class);
Route::resource('/student', StudentController::class);
Route::resource('/course', CourseController::class);

Route::resource('/post', PostController::class);
Route::resource('/country', CountryController::class);
Route::resource('/user', UserController::class);
