<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\System\ApiServeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('service', ApiServeController::class);

Route::post('/serve/sisadesel/dataCreateCashRegister',[ApiServeController::class, 'dataCreateCashRegister']);

Route::post('/serve/sisadesel/dataUpdateCashRegister',[ApiServeController::class, 'dataUpdateCashRegister']);

Route::post('/serve/sisadesel/dataCreateProspect',[ApiServeController::class, 'dataCreateProspect']);
