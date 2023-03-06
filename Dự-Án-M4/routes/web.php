<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
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

Route::get('/', function (){
    return view('admin.home');
});

Route::get('/trang-dang-ky', function (){
    return view('shop.login');
})->name('login');

Route::get('/trang-dang-nhap', function (){
    return view('shop.register');
})->name('register');

Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    
    });

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('customer.index');
        Route::get('/create', [ProductController::class, 'create'])->name('customer.create');
        Route::post('/store', [ProductController::class, 'store'])->name('customer.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('customer.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('customer.update');
        Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('customer.destroy');
    
    });
        
   
});
//SHOP
Route::prefix('shop')->group(function () {
    Route::get('/index', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/showsanpham/{id}', [ShopController::class, 'show'])->name('showsanpham');
    Route::get('/checkOuts', [ShopController::class, 'checkOuts'])->name('shop.checkOuts');
    Route::get('/search', [ShopController::class, 'search'])->name('shop.search');
    Route::get('/login', [ShopController::class, 'indexlogin'])->name('login.index');
});