<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MaytinhController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// BÀI-TẬP1
// BÀI TẬP 01C
// Hien thi form calculator
// Route::get('/bai-tap1/bai_tap01', function () {
//     return view('bai-tap1.bai_tap01');
// });

// // Xu ly calculator
// Route::post('/xu-ly-bai-tap01', function (Request $request){
//     $productDescription  = $request->input('productDescription');
//     $discountPrice  = $request->input('discountPrice');
//     $discountPercent   = $request->input('discountPercent');
//     $discountAmount  = $discountPrice * $discountPercent * 0.1;
//     return view('bai-tap1/show_discount_amount', compact(['discountAmount', 'discountPercent', 'productDescription']));
    
// });
// // BÀI 02: TỪ ĐIỂN
// Route::get('/bai-tap1/bai_tap02', function (){
//     return view('bai-tap1.bai_tap02');
// });

// Route::post('/xu-ly-bai02', function (Request $request){
//     $dictionary = [
//         "hello" => "xin chào",
//         "how" => "thế nào",
//         "book" => "quyển vở",
//         "computer" => "máy tính"
//     ];
//     $textbox = $request->input('textbox');
//     $dich = $request->input('dich');
//     $flag = 0;
//     foreach ($dictionary as $word => $description) {
//         if ($word == $textbox) {
//             echo "Từ: " . $word . ". <br/>Có nghĩa là: " . $description;
//             echo "<br/>";
//             $flag = 1;
//         }
//          elseif($description ==  $textbox ){
//             echo "Từ: " . $description . ". <br/>Có nghĩa là: " . $word;
//             $flag = 1;

//         }
    
//     }
//      if ($flag == 0) {
//         echo "Không tìm thấy từ cần tra." . '<br>';

//     }
// });

// //BÀI-TẬP2
// // BÀI TẬP:  Tạo trang con cho ứng dụng Task Management - P2
// // Tạo 1 nhóm route với tiền tố customer
Route::prefix('customers')->group(function () {

    Route::get('index', function () {
        // Hiển thị danh sách khách hàng
        return view('bai-tap2.customers.index');
    });

    Route::get('create', function () {
        // Hiển thị Form tạo khách hàng
        return view('bai-tap2.customers.create');
    });

    Route::post('store', function () {
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    });

    Route::get('{id}/show', function ($id) {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
        return view('bai-tap2.customers.show');
    });

    Route::get('{id}/edit', function ($id) {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
        return view('bai-tap2.customers.edit');
    });

    Route::patch('{id}/update', function ($id) {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::delete('{id}', function ($id) {
        // Xóa thông tin dữ liệu khách hàng
    });
});
// Route::get('customers', [CustomerController::class, 'index']);



// // BÀI TẬP 3. Controller trong Laravel
// //[Bài tập] Máy tính cá nhân
// Route::prefix('maytinh')->group(function () {
// Route::get('/', [MaytinhController::class, 'index'])->name('maytinh.showform');
// Route::post('/baitapmaytinh', [MaytinhController::class, 'hienthi'])->name('maytinh.baitapmaytinh');
// });

Route::resource('blogs',BlogController::class);