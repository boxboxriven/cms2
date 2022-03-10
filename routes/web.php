<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Query\Builder;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::post("/login", [UserController::class,'login']);
Route::post("/register", [UserController::class,'register']);
Route::get("/", [ProductController::class,'index']);
Route::get("/detail/{id}", [ProductController::class,'detail']);
Route::get("/detail/add_to_cart/{id}", [ProductController::class,'addToCart']);
Route::get("/cartlist", [ProductController::class,'cartList']);
Route::get("/removecart/{id}", [ProductController::class,'removeCart']);
Route::get("/ordernow", [ProductController::class,'ordernows']);
Route::get("/detail/buynow/{id}", [ProductController::class,'buynow']);
Route::get("/orderplace", [ProductController::class,'orderPlace']);
Route::get("/myorders", [ProductController::class,'myOrders']);

