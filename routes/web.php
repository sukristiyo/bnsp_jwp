<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/view-pdf', [App\Http\Controllers\HomeController::class, 'viewPdf'])->name('view-pdf');


Route::prefix('admin')->group(function () {
    Route::get('/registration-list', [App\Http\Controllers\Admin\RegistermbkmController::class, 'index'])->name('admin.registration-list');
    Route::get('/registration-detail/{id}', [App\Http\Controllers\Admin\RegistermbkmController::class, 'show'])->name('admin.registration-detail');
    Route::get('/registration-file/{id}', [App\Http\Controllers\Admin\RegistermbkmController::class, 'registrationFile'])->name('admin.registration-file');
    Route::post('/accept-registration/{id}', [App\Http\Controllers\Admin\RegistermbkmController::class, 'acceptRegistration'])->name('admin.accept-registration');
    Route::post('/reject-registration/{id}', [App\Http\Controllers\Admin\RegistermbkmController::class, 'rejectRegistration'])->name('admin.reject-registration');
});

Route::prefix('user')->group(function () {
    Route::prefix('register')->group(function () {
        Route::get('/', [App\Http\Controllers\RegistermbkmController::class, 'index'])->name('user.index-register-mbkm');
        Route::get('/register-mbkm', [App\Http\Controllers\RegistermbkmController::class, 'register'])->name('user.register-mbkm');
        Route::post('/save-register', [App\Http\Controllers\RegistermbkmController::class, 'store'])->name('user.save-register');
        Route::get('/submit-file/{id}', [App\Http\Controllers\RegistermbkmController::class, 'submitFile'])->name('user.submit-file');
        Route::post('/save-submit-file/{id}', [App\Http\Controllers\RegistermbkmController::class, 'saveSubmitFile'])->name('user.save-submit-file');
    });
});
