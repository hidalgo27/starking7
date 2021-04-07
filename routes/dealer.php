<?php

use App\Http\Controllers\Dealer\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('', [Homecontroller::class, "index"])->middleware('can:Leer Producto')->name('');
