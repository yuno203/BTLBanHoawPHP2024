<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use App\Models\ChuyenMuc;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $giohangs = GioHang::all();
        return view('users/giohang', compact('giohangs'));
    }
    public function indexdathang()
    {
        $donhangs = GioHang::all();
        return view('users/donhang', compact('donhangs'));
    }
    // public function showByCategory($MaChuyenMuc)
    // {
    //     $chuyenmucs1 = ChuyenMuc::all();
    //     $chuyenmucs = ChuyenMuc::findOrFail($MaChuyenMuc);

    //     // Lấy danh sách sản phẩm của chuyên mục
    //     $products = $chuyenmucs->sanPhams;
    //     return view('users.chitietsanpham', compact('chuyenmucs', 'products','chuyenmucs1'));
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Lấy thông tin sản phẩm từ request
    $masampham = $request->input('MaSanPham');
    $soluong = $request->input('SoLuong');
    $machuyenmuc = $request->input('MaChuyenMuc');

     // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
     $giohangs = GioHang::where('MaSanPham', $masampham)->first();

     // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
     if ($giohangs) {
         $giohangs->SoLuong += $soluong;
         $giohangs->save();}
    else{
    // Tạo một bản ghi mới trong bảng giohang
    $giohangs = new GioHang();
    $giohangs->MaSanPham = $masampham;
    $giohangs->SoLuong = $soluong;
    
    $giohangs->MaChuyenMuc = $machuyenmuc;

    // Lưu thông tin giỏ hàng vào cơ sở dữ liệu
    $giohangs->save();}
    return redirect()->route('GioHang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GioHang $gioHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $MaGioHang)
    {
        $giohang = GioHang::findOrFail($MaGioHang);
        return view('users/giohang', compact('giohang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $MaGioHang)
    {
        $request->validate([
            'SoLuong' => 'required|numeric',
        ]);
        
        // Tìm mục giỏ hàng cần cập nhật số lượng
        $giohang = GioHang::findOrFail($MaGioHang);
        
        // Cập nhật số lượng mới
        $giohang->update([
            'SoLuong' => $request->SoLuong,
        ]);
        
        // Chuyển hướng người dùng về trang giỏ hàng với thông báo thành công
        return redirect()->route('GioHang.index')->with('success', 'Cập nhật số lượng thành công!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $MaGioHang)
    {
        $giohang = GioHang::findOrFail($MaGioHang);
        $giohang->delete();
        return redirect()->route('GioHang.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}
