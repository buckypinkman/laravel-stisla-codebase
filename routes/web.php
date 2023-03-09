<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
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

// credits
Route::group(['as' => 'admin.', 'prefix' => 'admin'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/user/profile/{id}', [UserController::class, 'edit'])->name('profile');
    Route::resource('user', UserController::class);
    // Route::resource('role', [UserController::class]);
    // Route::resource('permission', [UserController::class]);
});
