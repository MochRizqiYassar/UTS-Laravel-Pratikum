<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();




Route::get('/home', [HomeController::class, 'bunga'])->name('home')->middleware('auth');
Route::get('/bunga/create', [HomeController::class, 'create'])->name("bunga.create")->middleware('auth');
Route::post('/bunga', [HomeController::class, 'store'])->name("bunga.store")->middleware('auth');
Route::post('/bunga/{bunga}', [HomeController::class, 'update'])->name("bunga.update")->middleware('auth');
Route::delete('/bunga/{bunga}', [HomeController::class, 'destroy'])->name("bunga.destroy")->middleware('auth');
Route::get('/bunga/{bunga}/edit', [HomeController::class, 'edit'])->name("bunga.edit")->middleware('auth');
Route::get('/logout', function(){\Auth::logout(); return redirect('login');})->middleware('auth');
Route::get('/halamanuser', [HomeController::class, 'user'])->name('halaman.user'); // Tidak menerapkan middleware('auth') di sini

//Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/home', [HomeController::class, 'bunga'])->name('home');
// Route::get('/bunga/create', [HomeController::class, 'create'])->name("bunga.create");
// Route::get('/bunga', [HomeController::class, 'store'])->name("bunga.store");
// Route::post('/bunga/{bunga}', [HomeController::class, 'update'])->name("bunga.update");
// Route::delete('/bunga/{bunga}', [HomeController::class, 'destroy'])->name("bunga.destroy");
// Route::get('/bunga/{bunga}/edit', [HomeController::class, 'edit'])->name("bunga.edit");
// Route::get('/logout', function(){\Auth::logout(); return redirect('login');});
// Route::get('/halamanuser', [HomeController::class, 'user'])->name('halaman.user');