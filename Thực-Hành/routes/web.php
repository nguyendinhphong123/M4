<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
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


// 1. Tổng quan về Laravel Framework
// [Thực hành] Tạo một trang đăng nhập và hiển thị lời chào
Route::get('/login', function () {
    return view('dang-nhap.login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('dang-nhap.welcome_admin');
    }
    return view('dang-nhap.login_error');
});

// [THỰC HÀNH] Ứng dụng xem giờ hiện tại của các thành phố trên thế giới
// Route::get('/{timezone?}', function ($timezone = null) {
//     if (!empty($timezone)) {

        // Khởi tạo giá trị giờ theo múi giờ UTC
        // $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

        // Thay đổi về múi giờ được chọn
        // $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

        // Hiển thị giờ theo định dạng mong muốn
//         echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
//     }
//     return view('dong-ho/index');
// });


// [THỰC HÀNH] Khởi tạo ứng dụng Task Management - P1Assignment
// Tạo 1 nhóm route với tiền tố customer
// Route::prefix('customer')->group(function(){
//     Route::get('index', function(){
//         return view('modules/customer/index');
//     });
//     Route::get('create', function(){

//     });
//     Route::post('store', function(){

//     });
//     Route::get('{id}/show', function(){

//     });
//     Route::get('{id}/edit', function(){

//     });
//     Route::patch('{id}/update', function(){

//     });
//     Route::delete('{id}', function(){

//     });
// });

// 3. Controller trong Laravel
//[THỰC HÀNH] Ứng dụng kiểm tra email hợp lệ
// Route::get('/', function () {
//     return view('kiem-tra-email/index');
// });

// Route::post('/check-email', [UserController::class, 'validationEmail'])->name('checkEmail');

// Route::get('create', [PostController::class, 'create']);
// Route::post('store', [PostController::class, 'store'])->name('store');

// Route::get('/{locale?}', function ($locale = null) {
//     App::setLocale($locale);
//     return view('welcome');
// })->name('user.change-language');

// [Thực hành] Tạo controller của ứng dụng Task Management - P3
// Route::get('customers', [CustomerController::class, 'index']);

// 4. View & Blade Template
// [Thực hành] Ứng dụng quản lý khách hàng - P2
// Route::get('/customers',[CustomerController::class,'index']);

// [Thực hành] Ứng dụng Task Management với Blade Template - Sử dụng if, foreach
Route::get('/', function () {
    return view('task.welcome');
})->name('welcome');
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/{id}/edit', [TaskController::class, 'update'])->name('tasks.update');
    Route::get('/{id}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::get('/{id}/show', [TaskController::class, 'show'])->name('tasks.show');
});
// 5. ORM và Eloquent
// [Thực hành] Sử dụng Eloquent Ứng dụng quản lý khách hàng
// Route::get('/', function () {
//     return view('home');
// });
Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('/{id}/edit', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('/{id}/destroy', [CustomerController::class, 'destroy'])->name('customers.destroy');
});
