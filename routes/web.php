<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\noteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdminDashboardController::class, 'index']);
Route::post('/note', [AdminDashboardController::class, 'store']);
Route::put('/note/{id}', [AdminDashboardController::class, 'update']);

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'Auth']], (function () {
}));
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [PengelolaController::class, 'register']);
