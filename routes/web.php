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

///Index///
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

///adminAuth///
Route::get('admin/login', [\App\Http\Controllers\Admin\authController::class, 'login'])->name('admin.login');
Route::post('admin/login', [\App\Http\Controllers\Admin\authController::class, 'store'])->name('admin.store');
Route::get('admin/logout', [\App\Http\Controllers\Admin\authController::class, 'logout'])->name('admin.logout');

///AdminDashboard///
Route::get('admin/dashboard', [\App\Http\Controllers\Admin\authController::class, 'dashboard'])->name('admin.dashboard');

///UserAuth///
Route::get('user/register', [\App\Http\Controllers\User\authController::class, 'register'])->name('user.register');
Route::post('user/store', [\App\Http\Controllers\User\authController::class, 'store'])->name('user.store');
Route::get('user/loginForm', [\App\Http\Controllers\User\authController::class, 'loginForm'])->name('user.loginForm');
Route::post('user/login', [\App\Http\Controllers\User\authController::class, 'login'])->name('user.login');
Route::get('user/logout', [\App\Http\Controllers\User\authController::class, 'logout'])->name('user.logout');

///Movies///
Route::get('movie/index', [\App\Http\Controllers\Admin\movieController::class, 'index'])->name('movie.index');
Route::get('movie/create', [\App\Http\Controllers\Admin\movieController::class, 'create'])->name('movie.create');
Route::post('movie/store', [\App\Http\Controllers\Admin\movieController::class, 'store'])->name('movie.store');
Route::get('movie/edit/{id}', [\App\Http\Controllers\Admin\movieController::class, 'edit'])->name('movie.edit');
Route::put('movie/update/{id}', [\App\Http\Controllers\Admin\movieController::class, 'update'])->name('movie.update');
Route::delete('movie/delete/{id}', [\App\Http\Controllers\Admin\movieController::class, 'destroy'])->name('movie.destroy');



















