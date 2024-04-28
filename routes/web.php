<?php

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
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\ChiTietHoaDonController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\ChiTietSanPhamController;
use App\Http\Controllers\TrangThaiTinTucController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\TrangThaiDonHangController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\ChiTietDonHangController;
use App\Models\KhachHang;

Route::get('/admin', function () {
    return view('adminlayouts.layout');
});
Route::get('/danhsach', function () {
    return view('sanpham.index');
});
Route::get('/themmoi', function () {
    return view('sanpham.themmoi');
});
Route::get('/themmoidonhang', function () {
    return view('donhang.themmoi');
});
Route::get('/themmoikhachhang', function () {
    return view('khachhang.themmoi');
});
Route::get('/themmoitt', function () {
    return view('tintuc.themmoi');
});
Route::get('/themmoicm', function () {
    return view('chuyenmuc.themmoi');
});
Route::get('/chuyenmuc', function () {
    return view('chuyenmuc.index');
});
Route::get('/khachhang', function () {
    return view('khachhang.index');
});
Route::get('/tintuc', function () {
    return view('tintuc.index');
});
Route::get('/donhang', function () {
    return view('donhang.index');
});
Route::get('/themmoichitietdonhang', function () {
    return view('chitietdonhang.themmoi');
});


Route::get('/themmoichitietdonhang', [ChiTietDonHangController::class, 'create']);
Route::get('/themmoidonhang', [DonHangController::class, 'create']);
Route::get('/dathang', [DonHangController::class, 'createuser']);
// Route::get('/themmoidonhang', [DonHangController::class, 'create']);
Route::get('/danhsach', [SanPHamController::class, 'index']);
Route::get('/chuyenmuc', [ChuyenMucController::class, 'index']);
Route::get('/donhang', [DonHangController::class, 'index']);
Route::get('/khachhang', [KhachHangController::class, 'index']);

Route::get('/themmoi', [SanPhamController::class, 'indexcmthemmoi']);

Route::get('/sanpham{MaSanPham}/edit', [SanPhamController::class, 'showedit']);
Route::get('/chuyenmuc{MaChuyenMuc}/edit', [ChuyenMucController::class, 'showedit']);
Route::get('/khachhang{MaKhachHang}/edit', [KhachHangController::class, 'showedit']);
Route::get('/donhang{MaDonHang}/info', [DonHangController::class, 'showinfo']);  
Route::get('/donhang{MaDonHang}/edit', [DonHangController::class, 'showedit']);
// Route::get('/donhang/{MaDonHang}/edit', [DonHangController::class, 'showedit'])->name('donhang.edit');
// Route::get('/sanpham{MaSanPham}/edit', [SanPhamController::class, 'showedit']);
// Route::post('/sanpham/themmoi', [SanPhamController::class, 'create'])->name('sanpham.create');
// Route::post('/sanpham/store', [SanPhamController::class, 'store'])->name('sanpham.store');
// Route::delete('/sanpham/{MaSanPham}', [SanPhamController::class, 'destroy'])->name('sanpham.destroy');
// Route::put('/sanpham/{MaSanPham}', [SanPhamController::class, 'update'])->name('sanpham.update');
// Route::get('/donhang/{MaKhachHang}', [DonHangController::class, 'showByMaKhachHang'])->name('donhang.index');



Route::get('/Home', function () {
    return view('users.Home');
});
// Route::get('/Home', [SanPHamController::class, 'indexad']);
Route::get('/Home/{MaSanPham}', [SanPhamController::class, 'showCt']);
Route::get('/Home{MaChuyenMuc}', [ChuyenMucController::class, 'index']);

Route::get('/giohang', function () {
    return view('users.giohang');
});
Route::get('/dathang', function () {
    return view('users.donhang');
});
Route::get('/giohang', [GioHangController::class, 'index']);
Route::get('/dathang', [GioHangController::class, 'indexdathang']);

Route::get('/Home', [SanPhamController::class, 'showHomePage']);
Route::get('/chuyenmuc/{MaChuyenMuc}', [SanPhamController::class, 'showByCategory'])->name('chuyenmuc.show');
Route::get('/Homead', function () {
    return view('adminlayouts.HomeAD');
});












Route::resource('GioHang', GioHangController::class); 
Route::resource('chuyenmuc', ChuyenMucController::class); 
Route::resource('sanpham', SanPhamController::class); 
Route::resource('hoadon', HoaDonController::class);
Route::resource('chitiethoadon', ChiTietHoaDonController::class); 
Route::resource('khachhang', KhachHangController::class); 
Route::resource('nhacungcap', NhaCungCapController::class); 
Route::resource('chitietsanpham', ChiTietSanPhamController::class); 
Route::resource('trangthaitintuc', TrangThaiTinTucController::class); 
Route::resource('tintuc', TinTucController::class); 
Route::resource('trangthaidonhang', TrangThaiDonHangController::class); 
Route::resource('donhang', DonHangController::class);
Route::resource('chitietdonhang', ChiTietDonHangController::class); 
