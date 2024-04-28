<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\KhachHang;
use App\Models\TrangThaiDonHang;
use App\Models\ChiTietDonHang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donhangs = DonHang::all();
        return view('donhang/index', compact('donhangs'));
    }
    

    // public function showByMaKhachHang($MaKhachHang)
    // {
    //     $donhangs = DonHang::where('MaKhachHang', $MaKhachHang)->get();
    //     return view('donhang.index', compact('donhangs'));
    // }
    
    public function showinfo($MaDonHang)
    {
        $donhangs = DonHang::where('MaDonHang', $MaDonHang)->firstOrFail(); // Tìm sản phẩm theo MaSanPham
        return view('donhang/info', compact('donhangs'));
    }
    public function showedit($MaDonHang)
    {
        $khachhangs = KhachHang::all(); // Lấy danh sách đơn hàng
        $trangthaidonhangs = TrangThaiDonHang::all(); // Lấy danh sách sản phẩm
        $donhangs = DonHang::where('MaDonHang', $MaDonHang)->firstOrFail(); // Tìm sản phẩm theo MaSanPham
        return view('donhang/edit', compact('donhangs','khachhangs', 'trangthaidonhangs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $khachhangs = KhachHang::all(); // Lấy danh sách đơn hàng
        $trangthaidonhangs = TrangThaiDonHang::all(); // Lấy danh sách sản phẩm
        return view('donhang/themmoi', compact('khachhangs', 'trangthaidonhangs'));
    }
    public function createuser()
    {
        $khachhangs = KhachHang::all(); // Lấy danh sách đơn hàng
        $trangthaidonhangs = TrangThaiDonHang::all(); // Lấy danh sách sản phẩm
        return view('users/donhang', compact('khachhangs', 'trangthaidonhangs'));
    }
    /**
     * Store a newly created resource in storage.
     */
  
        
    public function store(Request $request)
    {
         // Validate dữ liệu nhập vào từ form
         $validator = DonHang::make($request->all(), [
            'NgayDatHang' => 'required|date',
            'MaKhachHang' => 'required|exists:khachhang,MaKhachHang',
            'MaTrangThaiDonHang' => 'required|exists:trangthaidonhang,MaTrangThaiDonHang',
        ]);
    
       
        // Tạo sản phẩm mới và lưu vào cơ sở dữ liệu
        $donhangs = new DonHang();
        $donhangs->NgayDatHang = $request->NgayDatHang;
      
        $donhangs->MaKhachHang = $request->MaKhachHang;
        $donhangs->MaTrangThaiDonHang = $request->MaTrangThaiDonHang;
        $donhangs->save();
    
        return redirect()->route('donhang.index');
    }
    public function datHang(Request $request)
{
    $maTrangThaiMacDinh = 1; // Giả sử mã trạng thái mặc định là 1
    // Tạo khách hàng mới
    $khachhang = new KhachHang();
    $khachhang->TenKhachHang = $request->input('TenKhachHang');
    $khachhang->GioiTinh = $request->input('GioiTinh');
    $khachhang->DiaChi = $request->input('DiaChi');
    $khachhang->Email = $request->input('Email');
    $khachhang->SDT = $request->input('SDT');
    $khachhang->save();

    // Tạo đơn hàng mới
    $donhang = new DonHang();
    $donhang->MaKhachHang = $khachhang->MaKhachHang; // Lưu mã khách hàng
    $donhang->NgayDathang = now(); // Lưu ngày hiện tại
    $donhang->MaTrangThaiDonHang = $maTrangThaiMacDinh; // Trạng thái ban đầu
    $donhang->save();

    // Tạo chi tiết đơn hàng
    foreach ($request->input('users.donhang') as $product) {
        $chiTietDonHang = new ChiTietDonHang();
        $chiTietDonHang->MaDonHang = $donhang->MaDonHang; // Lưu mã đơn hàng
        $chiTietDonHang->MaSanPham = $product['MaSanPham'];
        $chiTietDonHang->SoLuong = $product['SoLuong'];
        $chiTietDonHang->DonGia = $product['Gia'];
        $chiTietDonHang->save();
    }

    return redirect()->route('route_to_success_page')->with('success', 'Đơn hàng đã được đặt thành công!');
}


    /**
     * Display the specified resource.
     */
    public function show(DonHang $donHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DonHang $MaDonHang)
    {
        // $khachhangs = KhachHang::all(); // Lấy danh sách đơn hàng
        // $trangthaidonhangs = TrangThaiDonHang::all(); // Lấy danh sách sản phẩm
        // $donhangs = DonHang::findOrFail($MaDonHang);
        // return view('donhang/edit', compact('khachhangs', 'trangthaidonhangs','donhangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $MaDonHang)
    {
        $request->validate([
            'NgayDatHang' => 'required|date',
            'MaKhachHang' => 'required|exists:khachhang,MaKhachHang',
            'MaTrangThaiDonHang' => 'required|exists:trangthaidonhang,MaTrangThaiDonHang',
        ]);
    
       
        // Tạo sản phẩm mới và lưu vào cơ sở dữ liệu
        $donhangs = Donhang::findOrFail($MaDonHang);
        $donhangs->NgayDatHang = $request->NgayDatHang;
      
        $donhangs->MaKhachHang = $request->MaKhachHang;
        $donhangs->MaTrangThaiDonHang = $request->MaTrangThaiDonHang;
        $donhangs->save();
    
        return redirect()->route('donhang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $MaDonHang)
    {
        $donhangs = Donhang::findOrFail($MaDonHang);
        $donhangs->delete();
        return redirect()->route('donhang.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}
