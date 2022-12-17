<?php

use App\Http\Controllers\Api\V1\ReservationController as ReservationController;
use App\Http\Controllers\Api\V1\ResturantController as ResturantController;
use App\Http\Controllers\Api\V1\UserController as UserController;
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

Route::prefix('v1')->group(function ()
{
    Route::prefix('resturant')->group(function (){
        Route::get('/index', [ResturantController::class, 'index']);
        Route::get('/show/{resturant}', [ResturantController::class, 'show']);
        Route::put('/store', [ResturantController::class, 'store']);
        Route::delete('/delete/{resturant}', [ResturantController::class, 'destroy']);
        Route::get('/edit/{resturant}', [ResturantController::class, 'edit']);
        Route::patch('/update/{resturant}', [ResturantController::class, 'update']);
    });

    Route::prefix('reservation')->group(function (){
        Route::get('/reserved', [ReservationController::class, 'userShow']);
        Route::put('/store', [ReservationController::class, 'store']);
    });

    Route::prefix('user')->group(function () {
        Route::put('/store', [UserController::class, 'store']);
        Route::post('/login', [UserController::class, 'login']);
    });

});

