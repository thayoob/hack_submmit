<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\User\UserController::class, 'index'])->name('home');
Route::get('/data', [App\Http\Controllers\User\UserController::class, 'userData']);
Route::post('/data', [App\Http\Controllers\User\UserController::class, 'userDataStore']);
Route::get('/analytics', [App\Http\Controllers\User\UserController::class, 'userDataAnalytics']);
Route::get('/course', [App\Http\Controllers\User\UserController::class, 'userDatacourse']);



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard.index');
});
