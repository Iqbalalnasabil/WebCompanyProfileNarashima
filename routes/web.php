<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\ProdukController; 
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomepageController;

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

//Home
Route::get('/', [HomeController::class, 'index']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
route::resource('/produk', ProdukController::class)->middleware('auth');
route::resource('/review', ReviewController::class)->middleware('auth');
route::get('/contact', [ContactController::class, 'index'])->middleware('auth');
route::put('/contact{id}', [ContactController::class, 'update'])->middleware('auth');
route::get('/about', [AboutController::class, 'index'])->middleware('auth');
route::put('/about{id}', [AboutController::class, 'update'])->middleware('auth');
route::get('/homepage', [HomepageController::class, 'index'])->middleware('auth');
route::put('/homepage{id}', [HomepageController::class, 'update'])->middleware('auth');