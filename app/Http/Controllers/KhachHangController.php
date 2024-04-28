<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $khachhangs = KhachHang::all();
        return view('khachhang/index', compact('khachhangs'));
    }
    public function showedit($MaKhachHang)
    {
        $khachhangs = KhachHang::where('MaKhachHang', $MaKhachHang)->firstOrFail(); // Tìm sản phẩm theo MaSanPham
        return view('khachhang/edit', compact('khachhangs'));
    }
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
        // Validate dữ liệu nhập vào từ form
        $validatedData = $request->validate([
            'TenKhachHang' => 'required|string|max:255',
            'GioiTinh' => 'required|boolean', // Giới tính là boolean (0 hoặc 1)
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|string|max:20',
            'Email' => 'required|string|email|max:255|unique:khachhang',
            //Thêm các quy tắc validation khác nếu cần
        ]);

        // Tạo một bản ghi mới cho khách hàng
        $khachhangs = new KhachHang();
        $khachhangs->TenKhachHang = $validatedData['TenKhachHang'];
        $khachhangs->GioiTinh = $validatedData['GioiTinh'];
        $khachhangs->DiaChi = $validatedData['DiaChi'];
        $khachhangs->SDT = $validatedData['SDT'];
        $khachhangs->Email = $validatedData['Email'];
        //Thêm các trường khác nếu cần

        // Lưu bản ghi mới vào cơ sở dữ liệu
        $khachhangs->save();

        // Redirect người dùng đến một trang cụ thể sau khi thêm khách hàng thành công
        return redirect()->route('khachhang.index'); // Thay 'ten_route' bằng tên route bạn muốn redirect
    }

    /**
     * Display the specified resource.
     */
    public function show(KhachHang $khachHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KhachHang $MaKhachHang)
    {
        $khachhangs = KhachHang::findOrFail($MaKhachHang);
        return view('khachhang/edit', compact('khachhangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $MaKhachHang)
    {
        // Validate dữ liệu nhập vào từ form
        $request->validate([
            'TenKhachHang' => 'required|string|max:255',
            'GioiTinh' => 'required|in:0,1',
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|string|max:20',
            'Email' => 'required|email|max:255',
            //Thêm các quy tắc validate cho các trường khác nếu cần
        ]);
    
       
     
        $khachhangs = KhachHang::findOrFail($MaKhachHang);
        $khachhangs->TenKhachHang = $request->TenKhachHang;
        $khachhangs->GioiTinh = $request->GioiTinh;
        $khachhangs->DiaChi = $request->DiaChi;
        $khachhangs->SDT = $request->SDT;
        $khachhangs->Email = $request->Email;
        $khachhangs->save();
    
        // Chuyển hướng người dùng đến trang hiển thị danh sách khách hàng hoặc trang cần thiết khác
        return redirect()->route('khachhang.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $MaChuyenMuc)
    {
        $khachhangs = KhachHang::findOrFail($MaChuyenMuc);
        $khachhangs->delete();
        return redirect()->route('khachhang.index')->with('success', 'Thông tin sản phẩm đã được cập nhật thành công!');
    }
}
