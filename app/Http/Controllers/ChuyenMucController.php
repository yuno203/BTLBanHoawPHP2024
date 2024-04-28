<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class ChuyenMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chuyenmucs = ChuyenMuc::all();
        return view('chuyenmuc/index', compact('chuyenmucs'));
       
    }

    

    public function showedit($MaChuyenMuc)
    {
        $chuyenmucs = ChuyenMuc::where('MaChuyenMuc', $MaChuyenMuc)->firstOrFail(); // Tìm sản phẩm theo MaSanPham
        return view('chuyenmuc/edit', compact('chuyenmucs'));
    }
    // public function indexdm()
    // {
    //     $products = ChuyenMuc::all();
    //     return view('adminlayouts/HomeAD', compact('products'));
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chuyenmuc.themmoi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate dữ liệu nhập vào từ form
         $validator = ChuyenMuc::make($request->all(), [
            'TenChuyenMuc' => 'required|string|max:255',
            'MoTa' => 'required|string|max:255',
            'DacBiet' => 'required|numeric',
        ]);
    
       
        // Tạo sản phẩm mới và lưu vào cơ sở dữ liệu
        $chuyenmuc = new ChuyenMuc();
        $chuyenmuc->TenChuyenMuc = $request->TenChuyenMuc;
      
        $chuyenmuc->MoTa = $request->MoTa;
        $chuyenmuc->DacBiet = $request->DacBiet;
        $chuyenmuc->save();
    
        return redirect()->route('chuyenmuc.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChuyenMuc $chuyenMuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChuyenMuc $MaChuyenMuc)
    {
        $chuyenmucs = ChuyenMuc::findOrFail($MaChuyenMuc);
        return view('chuyenmuc/edit', compact('chuyenmucs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $MaChuyenMuc)
    {
        $request->validate([
            'TenChuyenMuc' => 'required|string|max:255',
            'MoTa' => 'required|string|max:255',
            'DacBiet' => 'required|numeric',
        ]);
    
        // Find the product to update
        $chuyenmuc = ChuyenMuc::findOrFail($MaChuyenMuc);
        // Update product information
        $chuyenmuc->TenChuyenMuc = $request->TenChuyenMuc;
      
        $chuyenmuc->MoTa = $request->MoTa;
        $chuyenmuc->DacBiet = $request->DacBiet;
        $chuyenmuc->save();
    
        // Redirect the user to the product index page with a success message
        return redirect()->route('chuyenmuc.index')->with('success', 'Thông tin sản phẩm đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $MaChuyenMuc)
    {
        $chuyenmucs = ChuyenMuc::findOrFail($MaChuyenMuc);
        $chuyenmucs->delete();
        return redirect()->route('chuyenmuc.index')->with('success', 'Thông tin sản phẩm đã được cập nhật thành công!');
    }
}
