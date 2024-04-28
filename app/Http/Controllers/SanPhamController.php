<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\ChuyenMuc;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    $products = SanPham::all();
    return view('sanpham/index', compact('products'));

    }
    // public function indexad()
    // {
    //     $products = SanPham::all();
    //     return view('users/Home', compact('products'));
    // }
    public function indextintuc()
    {
        $products = SanPham::all();
        return view('tintuc/index', compact('products'));
    }
    public function showCt($MaSanPham)
    {
        
        $product = SanPham::where('MaSanPham', $MaSanPham)->firstOrFail(); // Tìm sản phẩm theo MaSanPham
        return view('users/chitietsanpham', compact('product'));
    }
    public function showedit($MaSanPham)
    {  
        $chuyenmucs = ChuyenMuc::all(); // Lấy danh sách danhmuc
        $product = SanPham::where('MaSanPham', $MaSanPham)->firstOrFail(); // Tìm sản phẩm theo MaSanPham
        return view('sanpham/edit', compact('product','chuyenmucs'));
    }
    
//user
    public function showHomePage()
{
    $bestSellingProducts = SanPham::orderBy('SoLuong', 'desc')->take(2)->get();
   
    $products = SanPham::all();

    $chuyenmucs = ChuyenMuc::all();
 
    return view('users.Home', compact('bestSellingProducts', 'products','chuyenmucs'));
}


// public function showchuyenmucid($MaChuyenMuc)
// {
  
//     $chuyenmucs = ChuyenMuc::where('MaChuyenMuc', $MaChuyenMuc)->firstOrFail();
 
//     return view('users.danhmuc', compact('chuyenmucs'));
// }
    public function showByCategory($MaChuyenMuc)
    {
        $chuyenmucs1 = ChuyenMuc::all();
        $chuyenmucs = ChuyenMuc::findOrFail($MaChuyenMuc);

        // Lấy danh sách sản phẩm của chuyên mục
        $products = $chuyenmucs->sanPhams;
        return view('users.danhmuc', compact('chuyenmucs', 'products','chuyenmucs1'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sanpham.themmoi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu nhập vào từ form
        $validator = SanPham::make($request->all(), [
            'TenSanPham' => 'required|string|max:255',
            'AnhDaiDien' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Gia' => 'required|numeric',
            'SoLuong' => 'required|numeric',
            'MaChuyenMuc' => 'required|exists:chuyenmuc,MaChuyenMuc',
        ]);
    
        // Nếu dữ liệu không hợp lệ, chuyển hướng lại với thông báo lỗi
       
        // Xử lý và lưu ảnh đại diện
        $imageName = time().'.'.$request->AnhDaiDien->extension();  
        $request->AnhDaiDien->move(public_path('anhhoa'), $imageName);
    
        // Tạo sản phẩm mới và lưu vào cơ sở dữ liệu
        $product = new SanPham();
        $product->TenSanPham = $request->TenSanPham;
        $product->AnhDaiDien = $imageName;
        $product->Gia = $request->Gia;
        $product->SoLuong = $request->SoLuong;
        $product->MaChuyenMuc = $request->MaChuyenMuc;
        $product->save();
    
        return redirect()->route('sanpham.index');

    }
    public function indexcmthemmoi()
    {
        $chuyenmucs = ChuyenMuc::all();
        return view('sanpham.themmoi', compact('chuyenmucs'));
    }
    /**
     * Display the specified resource.
     */
    public function show(SanPham $sanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($MaSanPham)
    {
        $product = SanPham::findOrFail($MaSanPham);
        return view('sanpham/edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $MaSanPham)
    {
        // Validate the request data
        $request->validate([
            'TenSanPham' => 'required|string|max:255',
            'AnhDaiDien' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Gia' => 'required|numeric',
            'SoLuong' => 'required|numeric',
            'MaChuyenMuc' => 'required|exists:chuyenmuc,MaChuyenMuc',
        ]);
    
        // Find the product to update
        $product = SanPham::findOrFail($MaSanPham);
    
        // Handle and save the uploaded image if the user changes it
        if ($request->hasFile('AnhDaiDien')) {
            $imageName = time().'.'.$request->AnhDaiDien->extension();  
            $request->AnhDaiDien->move(public_path('anhhoa'), $imageName);
            $product->AnhDaiDien = $imageName;
        }
    
        // Update product information
        $product->TenSanPham = $request->TenSanPham;
        $product->Gia = $request->Gia;
        $product->SoLuong = $request->SoLuong;
        $product->MaChuyenMuc = $request->MaChuyenMuc;
        $product->save();
    
        // Redirect the user to the product index page with a success message
        return redirect()->route('sanpham.index')->with('success', 'Thông tin sản phẩm đã được cập nhật thành công!');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($MaSanPham)
    {
        // Tìm sản phẩm cần xóa trong cơ sở dữ liệu
        $product = SanPham::findOrFail($MaSanPham);
        
        // Xóa sản phẩm
        $product->delete();
        
        // Chuyển hướng về trang danh sách sản phẩm sau khi xóa thành công
        return redirect()->route('sanpham.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
    
}
