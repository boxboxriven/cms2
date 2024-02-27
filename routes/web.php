<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AuthController;
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
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::get('/auth/google', [AuthController::class,'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class,'handleGoogleCallback']);
Route::get('/', [ProductController::class,'index'])->middleware('auth');

Route::get('/login', function () {return view('login');});

Route::get('/logout', function () {Session::forget('user');return redirect('login');});

Route::view('/payment','payment');
Route::view('/register','register');
Route::post("/login", [UserController::class,'login'])->name('login');
Route::post("/register", [UserController::class,'register']);
Route::get("/", [ProductController::class,'index']);
Route::get("/detail/{id}", [ProductController::class,'detail']);
Route::get("/detail/add_to_cart/{id}", [ProductController::class,'addToCart']);
Route::get("/cartlist", [ProductController::class,'cartList','isavailable']);
Route::get("/removecart/{id},{cart_id}", [ProductController::class,'removeCart']);
Route::get("/ordernow", [ProductController::class,'ordernows']);
Route::get("/detail/buynow/{id}", [ProductController::class,'buynow']);
Route::get("/orderplace", [ProductController::class,'orderPlace']);
Route::get("/myorders", [ProductController::class,'myOrders']);
Route::get("/about", [ProductController::class,'aboutus']);
Route::get("/admin", [ProductController::class,'ModifAdmin']);
Route::get("/ajouter", [ProductController::class,'ajouter']);
Route::post("/ajouter1", [ProductController::class,'ajouter1']);
Route::get("/ajouterclient", [ProductController::class,'ajouterclient']);
Route::post("/ajouterclient1", [ProductController::class,'ajouterclient1']);
Route::get("/supprimerclient", [ProductController::class,'supprimerclient']);
Route::get("/suprimerproduit", [ProductController::class,'suprimerproduit']);
Route::get("/supprimercommande", [ProductController::class,'suprimercommande']);
Route::get("/modifierproduit", [ProductController::class,'modifierproduit']);
Route::get("/modifierproduit1", [ProductController::class,'modifierproduit1']);
Route::get("/adminlogin", [ProductController::class,'adminlogin']);
Route::get("/adminlogin1", [ProductController::class,'adminlogin1']);
Route::get('/logoutadmin', function () {
    Session::forget('admin');
    return redirect('test');
});
Route::get("/contactpage", [ProductController::class,'contactpage']);
Route::get("/contactpage1", [ProductController::class,'contactpage1']);
Route::get("/admincontact1", [ProductController::class,'admincontact1']);
Route::get("/supprimercommentaire", [ProductController::class,'suprimercommentaire']);
Route::get("/repondrecommentaire", [ProductController::class,'repondrecommentaire']);
Route::post("/repondrecommentaire1", [ProductController::class,'repondrecommentaire1']);
Route::get("/editapropos", [ProductController::class,'editapropos']);
Route::post("/editapropos1", [ProductController::class,'editapropos1']);
Route::get("/index2", [ProductController::class,'index1']);
Route::get("/abonnement", [ProductController::class,'abonnement']);
Route::get("/modifiercommande", [ProductController::class,'modifiercommande']);
Route::get("/modifiercommande1", [ProductController::class,'modifiercommande1']);
Route::get("/abonnes", [ProductController::class,'abonnes']);
Route::get("/supabon", [ProductController::class,'supabon']);
Route::get('/search', [SearchController::class,'findSearch']);
Route::get("/admin1", [ProductController::class,'admin']);
Route::get("/test", [ProductController::class,'test']);
Route::get("/conproduit", [ProductController::class,'ModifAdmin']);
Route::get("/admin2", [ProductController::class,'ModifAdmin1']);
Route::get("/admin3", [ProductController::class,'ModifAdmin2']);
Route::get("/admin4", [ProductController::class,'ModifAdmin3']);
Route::get("/adminregister", [ProductController::class,'adminregister']);
Route::get("/adminregister1", [ProductController::class,'adminregister1']);
Route::post('/process-payment', [PaymentController::class, 'createPaymentIntent']);

