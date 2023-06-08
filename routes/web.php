<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutAdminController;

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
// Masuk kehalaman utama pengunjung
Route::get('/', [PengunjungController::class, 'index'])->middleware('guest');
// // Halaman Login
// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'cekStatusLogin'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Halaman Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// Halaman Menu
Route::resource('/menu', MenuController::class)->middleware('auth');

// Halaman About
Route::resource('/about', AboutController::class);
Route::resource('/aboutAdmin', AboutAdminController::class)->middleware('auth');

// Halaman Product
Route::resource('/products', ProductController::class);
