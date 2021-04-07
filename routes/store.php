<?php

use App\Http\Controllers\Store\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'store/product');
Route::get('', [Homecontroller::class, "index"])->middleware('can:Leer Producto')->name('');
Route::get('listar-prodcutos', [Homecontroller::class, "listarPordcutos"])->middleware('can:Leer Producto')->name('listar_productos');
