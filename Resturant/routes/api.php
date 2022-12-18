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

Route::middleware('auth:api')->group(function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::prefix('v1')->group(function ()
    {
        Route::prefix('resturant')->controller(ResturantController::class)->group(function (){
            Route::get('/index', 'index');
            Route::get('/show/{resturant}', 'show');
            Route::put('/store', 'store');
            Route::delete('/delete/{resturant}', 'destroy');
            Route::get('/edit/{resturant}', 'edit');
            Route::patch('/update/{resturant}', 'update');
        });

        Route::prefix('reservation')->controller(ReservationController::class)->group(function (){
            Route::get('/reserved', 'userShow');
            Route::put('/store', 'store');
        });

        Route::prefix('user')->controller(UserController::class)->group(function () {
            Route::put('/store', 'store');
            Route::post('/login', 'login');
            Route::get('/logout', 'logout');
        });

    });

});

Route::put('/register', [UserController::class, 'register']);


