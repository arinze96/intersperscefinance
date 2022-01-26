<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::get('/', [UserController::class,"index"])->name("index");
Route::get('/about', [UserController::class,"about"])->name("about");
Route::get('/faq', [UserController::class,"faq"])->name("faq");
Route::get('/login', [UserController::class,"login"])->name("login");
Route::get('/home', [UserController::class,"home"])->name("home");
Route::get('/contact', [UserController::class,"contact"])->name("contact");
Route::get('/services', [UserController::class,"services"])->name("services");
Route::get('/register', [UserController::class,"register"])->name("register");
Route::get('/investmentplans', [UserController::class,"investmentplans"])->name("investmentplans");
Route::get('/stocks', [UserController::class,"stocks"])->name("stocks");
Route::get('/cryptocurrencies', [UserController::class,"cryptocurrencies"])->name("cryptocurrencies");
Route::get('/forex', [UserController::class,"forex"])->name("forex");
Route::get('/realestate', [UserController::class,"realestate"])->name("realestate");
Route::get('/escrowservices', [UserController::class,"escrowservices"])->name("escrowservices");
Route::get('/loans', [UserController::class,"loans"])->name("loans");
Route::get('/nonfarmpayroll', [UserController::class,"nonfarmpayroll"])->name("nonfarmpayroll");
