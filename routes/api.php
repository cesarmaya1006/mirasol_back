<?php

use App\Http\Controllers\Admin\CasaController;
use App\Http\Controllers\Admin\ParqueoController;
use App\Http\Controllers\Admin\CostosController;
use App\Http\Controllers\Admin\ParqeaderosController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('casas', CasaController::class);
Route::apiResource('costos', CostosController::class);
Route::apiResource('parqueaderos', ParqeaderosController::class);
Route::apiResource('parqueos', ParqueoController::class);
