<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\DonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ChiTietDonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showct($MaDonHang)
{
    $chitietdonhangs = ChiTietDonHang::findOrFail($MaDonHang);
    // Lấy danh sách sản phẩm của đơn hàng
    $sanphams = $chitietdonhangs->sanPham;

    return view('donhang.info', compact('chitietdonhangs', 'sanphams'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $donhangs = DonHang::all(); // Lấy danh sách đơn hàng
        $products = SanPham::all(); // Lấy danh sách sản phẩm
        return view('chitietdonhang/themmoi', compact('donhangs', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = ChiTietDonHang::make($request->all(), [
            'MaDonHang' => 'required|exists:donhang,MaDonHang',
            'MaSanPham' => 'required|exists:sanpham,MaSanPham',
            'SoLuong' => 'required|numeric',
            'DonGia' => 'required|numeric',
        ]);
    
        $existingItem = ChiTietDonHang::where('MaDonHang', $request->MaDonHang)
        ->where('MaSanPham', $request->MaSanPham)
        ->first();

        if ($existingItem) {
        // If the product already exists in the order, update its quantity
        $existingItem->SoLuong += $request->SoLuong;
        $existingItem->save();
        } else {
        // If the product doesn't exist in the order, create a new entry
        $chiTietDonHang = new ChiTietDonHang();
        $chiTietDonHang->MaDonHang = $request->MaDonHang;
        $chiTietDonHang->MaSanPham = $request->MaSanPham;
        $chiTietDonHang->SoLuong = $request->SoLuong;
        $chiTietDonHang->DonGia = $request->DonGia;
        $chiTietDonHang->save();
        }
    
    return redirect()->route('donhang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChiTietDonHang $chiTietDonHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChiTietDonHang $chiTietDonHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChiTietDonHang $chiTietDonHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $MaChiTietDonHang)
    {
        $chitietdonhangs = ChiTietDonHang::findOrFail($MaChiTietDonHang);
        $chitietdonhangs->delete();
        return redirect()->route('donhang.index');
    }
}
