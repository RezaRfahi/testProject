<?php

use App\Http\Controllers\Api\V1\ResturantController as ResturantController;
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

Route::prefix('resturant')->group(function (){
        Route::get('/index', [ResturantController::class, 'index']);
        Route::get('/show/{resturant}', [ResturantController::class, 'show']);
        Route::post('/create', [ResturantController::class, 'store']);
    }
);
