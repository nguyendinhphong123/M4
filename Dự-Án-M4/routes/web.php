<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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




// Route::get('/trang-dang-ky', function (){
//     return view('shop.login');
// })->name('login');

// Route::get('/trang-dang-nhap', function (){
//     return view('shop.register');
// })->name('register');

Route::get('1', [AuthController::class, 'home'])->name('trangchu');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'logout'])->name('register.index');
Route::post('/checklogin', [AuthController::class, 'postLogin'])->name('admin.checklogin');



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
        Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');
        Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::put('product/softdeletes/{id}', [ProductController::class, 'softdeletes'])->name('product.softdeletes');
        Route::put('product/restoredelete/{id}', [ProductController::class, 'restoredelete'])->name('product.restoredelete');
        Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash');
    
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
    });

    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('order.index');
        Route::get('/detail/{id}', [OrderController::class, 'detail'])->name('order.detail');
    });
});

// Chức vụ
Route::group(['prefix' => 'groups'], function () {
    Route::get('/', [GroupController::class, 'index'])->name('group.index');
    Route::get('/create', [GroupController::class, 'create'])->name('group.create');
    Route::post('/store', [GroupController::class, 'store'])->name('group.store');
    Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
    Route::put('/update/{id}', [GroupController::class, 'update'])->name('group.update');
    Route::delete('destroy/{id}', [GroupController::class, 'destroy'])->name('group.destroy');
    Route::get('/detail/{id}', [GroupController::class, 'detail'])->name('group.detail');
    Route::put('/group_detail/{id}', [GroupController::class, 'group_detail'])->name('group.group_detail');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/editpass/{id}', [UserController::class, 'editpass'])->name('user.editpass');
    Route::put('/updatepass/{id}', [UserController::class, 'updatepass'])->name('user.updatepass');
    Route::get('/adminpass/{id}', [UserController::class, 'adminpass'])->name('user.adminpass');
    Route::put('/adminUpdatePass/{id}', [UserController::class, 'adminUpdatePass'])->name('user.adminUpdatePass');
});


//SHOP
Route::prefix('shop')->group(function () {
    Route::get('/index', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/showsanpham/{id}', [ShopController::class, 'show'])->name('showsanpham');
    Route::get('/checkOuts', [ShopController::class, 'checkOuts'])->name('shop.checkOuts');
    Route::post('/order', [ShopController::class, 'order'])->name('order');
    Route::get('/search', [ShopController::class, 'search'])->name('shop.search');


    Route::get('/login', [ShopController::class, 'indexlogin'])->name('login.index');
    Route::post('/checklogin', [ShopController::class, 'checklogin'])->name('shop.checklogin');
    Route::post('/checkregister', [ShopController::class, 'checkregister'])->name('shop.checkregister');
    Route::get('/register', [ShopController::class, 'register'])->name('shop.register');
    Route::post('/shoplogout', [ShopController::class, 'logout'])->name('shoplogout');

    Route::get('/show/{id}', [ShopController::class, 'show'])->name('shop.show');
    Route::get('/store/{id}', [ShopController::class, 'store'])->name('shop.store');
    Route::get('/cart', [ShopController::class, 'cart'])->name('cart.index');
    Route::patch('update-cart', [ShopController::class, 'update']);

    Route::delete('/remove-from-cart', [ShopController::class, 'remove']);
});