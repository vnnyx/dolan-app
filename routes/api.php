<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\WisataController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);

Route::group(['prefix' => 'destination', 'middleware' => ['jwtAuth', 'isUser']], function () {
    Route::get('/popular', [WisataController::class, 'wisataPopuler']);
    Route::get('/new', [WisataController::class, 'wisataBaru']);
    Route::get('/detail/{id}', [WisataController::class, 'detailWisata']);
    Route::get('/', [WisataController::class, 'cariWisata']);
    Route::post('/favorite/{id}', [WisataController::class, 'addWisataFavorite']);
    Route::delete('/favorite/{id}', [WisataController::class, 'deleteWisataFavorite']);
    Route::get('/favorite', [WisataController::class, 'listWisataFavorite']);
});

Route::get('/history/ticket', [TransactionController::class, 'listHistoryTicket'])->middleware(['jwtAuth', 'isUser']);
Route::post('/order', [TransactionController::class, 'order'])->middleware(['jwtAuth', 'isUser']);

Route::post('/send-otp', [ResetPasswordController::class, 'sendEmail']);
Route::post('/validate-otp', [ResetPasswordController::class, 'validateOtp']);
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword']);
