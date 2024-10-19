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






















