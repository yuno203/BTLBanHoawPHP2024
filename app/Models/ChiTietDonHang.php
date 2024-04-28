<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $table = "chitietdonhang";
    protected $primaryKey = 'MaChiTietDonHang';
    protected $fillable = ["MaChiTietDonHang",'MaDonHang','MaSanPham','SoLuong','DonGia'];

    public function sanPham()
    {
        return $this->belongsTo(SanPham::class, 'MaSanPham', 'MaSanPham');  
    }
    public $timestamps = false; // Tắt tự động cập nhật thời gian

}
