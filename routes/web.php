<?php

use App\Http\Controllers\NameController;
use App\Models\Name;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route cho trang chủ
Route::get('/', [NameController::class, 'index'])->name('name.index');
 Route::get('/trangchu', [NameController::class, 'index'])->name('name.index');

//trang hiển thị sản phẩm
Route::get('/sanpham', [NameController::class, 'sanpham'])->name('name.sanpham');

// Route cho trang thêm mới sản phẩm
Route::get('/create', [NameController::class, 'create'])->name('name.create');
Route::post('/create', [NameController::class, 'store'])->name('name.store');

// Route cho trang chỉnh sửa sản phẩm
Route::get('/edit/{id}', [NameController::class, 'edit'])->name('name.edit');
Route::put('/edit/{id}', [NameController::class, 'update'])->name('name.update');

// Route cho việc xóa sản phẩm
Route::delete('/delete/{id}', [NameController::class, 'destroy'])->name('name.destroy');

// Route cho trang hiển thị sản phẩm theo danh mục
Route::get('/names/category/{category}', function ($category) {
    $categoryName = DB::table('hangs')->where('id', $category)->value('tenhang');
    $names = DB::table('names')
        ->where('category_id', $category)
        ->get();
    return view('category', compact('names', 'categoryName'));
});

// Route cho trang hiển thị chi tiết sản phẩm
Route::get('/name/{id}', [Namecontroller::class, "show"])->name('show');


