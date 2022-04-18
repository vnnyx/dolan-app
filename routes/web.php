<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ListAkunController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PengelolaDashboardController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionOwnerController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContentController;

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
Route::get('/', function () {
   return view('welcome');
});
Route::get('/forgot-password', [ForgotPasswordController::class, 'sendEmailView']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendEmail']);
Route::get('/reset/password/{token}', [ForgotPasswordController::class, 'forgotPasswordView'])->name('reset.password');
Route::put('/reset/password', [ForgotPasswordController::class, 'forgotPassword']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisController::class, 'index']);
Route::post('/register', [RegisController::class, 'store']);

//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'Auth']], (function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::post('/note', [AdminDashboardController::class, 'store']);
    Route::post('/note/{id}', [AdminDashboardController::class, 'update']);
    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::get('/akun', [ListAkunController::class, 'list']);
    Route::get('/content', [AdminContentController::class, 'createContent']);
    Route::post('/content', [AdminContentController::class, 'storeContent']);
    Route::post('/content/{id}', [AdminContentController::class, 'update']);
    Route::get('/content/{id}', [AdminContentController::class, 'delete']);
    Route::get('/akun/block/{id}', [ListAkunController::class, 'blokir']);
    Route::get('/akun/unblock/{id}', [ListAkunController::class, 'unblokir']);
    Route::get('/logout', [LogoutController::class, 'logout']);
}));


//Pengelola / owner
Route::group(['prefix' => 'pengelola', 'middleware' => ['isOwner', 'Auth']], (function () {
    Route::get('/dashboard', [PengelolaDashboardController::class, 'index']);
    Route::get('/transaction', [TransactionOwnerController::class, 'index']);
    Route::put('/transaction/{id}', [TransactionOwnerController::class, 'update']);
    Route::get('/wisata', [WisataController::class, 'index']);
    Route::post('/wisata', [WisataController::class, 'store']);
    Route::post('/wisata/{id}', [WisataController::class, 'update']);
    Route::get('/wisata/{id}', [WisataController::class, 'delete']);
    Route::put('/data-wisata', [WisataController::class, 'updateData']);
    Route::get('/logout', [LogoutController::class, 'logout']);
}));
