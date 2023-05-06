<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CheckoutController;

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

Route::apiResource('products', ProductController::class);
Route::get('carts',[CartController::class,'getAllCart']);
Route::post('carts/add_to_cart',[CartController::class,'addToCart']);
Route::put('update_cart',[CartController::class,'update']);
Route::delete('carts/remove_cart/{id}',[CartController::class,'removeToCart']);

Route::post('checkout',[CheckoutController::class,'order']);

