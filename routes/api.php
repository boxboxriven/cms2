<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------z
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->group(function() {

    Route::post('/payment', 'App\Http\Controllers\PaymentController@createPaymentIntent');

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

});
