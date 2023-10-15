<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TitikController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\JadwalController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

    Route::get('/mobile', [AuthController::class, 'index']);
    Route::post('/mobile/login', [AuthController::class, 'login'])->name('mobilelogin');
    Route::post('/mobile/register', [AuthController::class, 'register'])->name('mobileregister');
    Route::post('/pet/create', [PetController::class, 'tambah_pet']);
    Route::post('/jadwal/store', [JadwalController::class, 'tambahjadwal']);
    Route::get('view/titik', [TitikController::class, 'titikmap']);

