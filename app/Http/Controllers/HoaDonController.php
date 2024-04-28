<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Models\TrangThaiDonHang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HoaDon $hoaDon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HoaDon $hoaDon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HoaDon $hoaDon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HoaDon $hoaDon)
    {
        //
    }
}
