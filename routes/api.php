<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\OrderController;
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

Route::get('/v1/advance/list', [AdvanceController::class, 'getAdvanceList']);
Route::post('/v1/advance/add', [AdvanceController::class, 'postAdvanceSave']);
Route::post('/v1/advance/edit', [AdvanceController::class, 'postAdvanceUpdate']);
Route::post('/v1/advance/del', [AdvanceController::class, 'postAdvanceDelete']);

Route::get('/v1/order/list', [OrderController::class, 'getOrderList']);
Route::post('/v1/order/add', [OrderController::class, 'postOrderSave']);
Route::post('/v1/order/edit', [OrderController::class, 'postOrderUpdate']);
Route::post('/v1/order/del', [OrderController::class, 'postOrderDelete']);
