<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ListAkunController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengelolaDashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionOwnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengelolaController;

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

// Public route
Route::get('/coba', function () {
   return view('register');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [PengelolaController::class, 'register']);
Route::get('/content', [PengelolaController::class, 'createContent']);
Route::post('/content', [PengelolaController::class, 'storeContent']);

//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'Auth']], (function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::post('/note', [AdminDashboardController::class, 'store']);
    Route::put('/note/{id}', [AdminDashboardController::class, 'update']);
    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::get('/akun', [ListAkunController::class, 'list']);
}));


//Pengelola / owner
Route::group(['prefix' => 'pengelola', 'middleware' => ['isOwner', 'Auth']], (function () {
    Route::get('/dashboard', [PengelolaDashboardController::class, 'index']);
    Route::get('/transaction', [TransactionOwnerController::class, 'index']);
    Route::put('/transaction/{id}', [TransactionOwnerController::class, 'update']);
}));



