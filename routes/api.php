<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\WisataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'wisata', 'middleware' => ['jwtAuth']], function (){
    Route::get('/populer', [WisataController::class, 'wisataPopuler']);
    Route::get('/baru', [WisataController::class, 'wisataBaru']);
    Route::get('/{id}', [WisataController::class, 'detailWisata']);
});
