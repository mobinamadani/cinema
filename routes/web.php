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

///------------------------------------------------Welcome---------------------------------------------------///
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


///------------------------------------------------adminAuth-------------------------------------------------///

Route::prefix('admin')
    ->controller(\App\Http\Controllers\Admin\authController::class)
    ->name('admin.')
    ->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/store', 'store')->name('store');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });


///-------------------------------------------------UserAuth-------------------------------------------------///

Route::prefix('user')
      ->controller(\App\Http\Controllers\User\authController::class)
      ->name('user.')
      ->group(function () {
          Route::get('/register', 'register')->name('register');
          Route::post('/store', 'store')->name('store');
          Route::get('/loginForm', 'loginForm')->name('loginForm');
          Route::post('/login', 'login')->name('login');
          Route::get('/logout', 'logout')->name('logout');
      });


///-----------------------------------------------manageAdmin-----------------------------------------------///

Route::prefix('show')
      ->controller(\App\Http\Controllers\Admin\manageController::class)
      ->group(function () {
         Route::get('/user', 'showUser')->name('user.show');
         Route::get('/reservation', 'showReservation')->name('reservation.show');
      });


///-------------------------------------------------Movies-------------------------------------------------///

Route::prefix('movie')
      ->controller(\App\Http\Controllers\Admin\movieController::class)
      ->name('movie.')
      ->group(function () {
         Route::get('/index', 'index')->name('index');
         Route::get('/create', 'create')->name('create');
         Route::post('/store', 'store')->name('store');
         Route::get('/edit/{id}', 'edit')->name('edit');
         Route::put('/update/{id}', 'update')->name('update');
         Route::delete('/delete/{id}', 'destroy')->name('destroy');
      });


///----------------------------------------------Reservation----------------------------------------------///

Route::prefix('reservation')
      ->controller(\App\Http\Controllers\Reserve\reservationController::class)
      ->name('reservation.')
      ->group(function () {
          Route::get('/', 'create')->name('create');
          Route::post('/store', 'store')->name('store');
      });
