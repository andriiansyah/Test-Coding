<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'store'])->name('login.store')->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

Route::post('/logout', [LogoutController::class, 'index'])->name('logout')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
Route::post('/user', [UserController::class, 'store'])->name('user.store')->middleware('auth');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update')->middleware('auth');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');

Route::get('/kampus', [KampusController::class, 'index'])->name('kampus')->middleware('auth');
Route::get('/kampus/create', [KampusController::class, 'create'])->name('kampus.create')->middleware('auth');
Route::post('/kampus', [KampusController::class, 'store'])->name('kampus.store')->middleware('auth');
Route::get('/kampus/{id}/edit', [KampusController::class, 'edit'])->name('kampus.edit')->middleware('auth');
Route::put('/kampus/{id}', [KampusController::class, 'update'])->name('kampus.update')->middleware('auth');
Route::delete('/kampus/{id}', [KampusController::class, 'destroy'])->name('kampus.destroy')->middleware('auth');

Route::get('/program', [ProgramStudiController::class, 'index'])->name('program')->middleware('auth');
Route::get('/program/create', [ProgramStudiController::class, 'create'])->name('program.create')->middleware('auth');
Route::post('/program', [ProgramStudiController::class, 'store'])->name('program.store')->middleware('auth');
Route::get('/program/{id}/edit', [ProgramStudiController::class, 'edit'])->name('program.edit')->middleware('auth');
Route::put('/program/{id}', [ProgramStudiController::class, 'update'])->name('program.update')->middleware('auth');
Route::delete('/program/{id}', [ProgramStudiController::class, 'destroy'])->name('program.destroy')->middleware('auth');