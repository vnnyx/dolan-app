<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\noteController;

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

// Route::get('/', function () {
//     return view('dash-admn');
// });
// Route::resource('note', noteController::class);
Route::get('/dash-admn', [noteController::class , 'index']);
Route::post('create', [noteController::class , 'create']);