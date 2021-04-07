<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/bim', [HomeController::class, 'bim'])->name('bim');
Route::get('/landing-bim', [HomeController::class, 'landingbim'])->name('landingbim');

Route::get('/ubigeoDe', [HomeController::class, 'ubigeoDe'])->name('ubigeode');
Route::get('/ubigeoPr', [HomeController::class, 'ubigeoPr'])->name('ubigeopr');
Route::get('/ubigeoDi', [HomeController::class, 'ubigeoDi'])->name('ubigeodi');
