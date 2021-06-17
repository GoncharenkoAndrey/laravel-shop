<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, "index"])->name("index");
Route::get("/{categories}", [MainController::class, "categories"])->name("categories");
Route::get("/cart/place", [CartController::class, "cartPlace"])->name("cart-place");
Route::post("/cart/add/{id}", [CartController::class, "cartAdd"])->name("cart-add");
Route::post("/cart/remove/{id}", [CartController::class, "cartRemove"])->name("cart-remove");
Route::get("/{category}", [MainController::class,"category"])->name("category");
Route::get("/{product}", [MainController::class, "product"])->name("product");
Route::get("/cart", [CartController::class,"cart"])->name("cart");
Route::post("/cart/confirm", [CartController::class, "cartConfirm"])->name("cart-confirm");