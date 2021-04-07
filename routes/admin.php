<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('', [Homecontroller::class, "index"]);

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only('index','edit','update')->names('users');
Route::resource('users', UserController::class)->only('index','edit','update')->names('users');

Route::get('landing-bim', [UserController::class, 'landing'])->name('landing-bim');

