<?php

use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\QrcodeController;

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

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);

});

Route::group(['prefix' => "qrcode/status", 'middleware' => ['auth:api'] ], function () {
    Route::post('/update', [QrcodeController::class, 'qrcodeStatusUpdate']);
    Route::get('/check', [QrcodeController::class, 'qrcodeStatusCheck']);

});
