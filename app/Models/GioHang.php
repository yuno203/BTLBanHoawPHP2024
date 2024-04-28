<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;
    protected $table='giohang';
    protected $primaryKey = 'MaGioHang';
    protected $fillable = ['MaGioHang', 'MaNguoiDung','MaSanPham','SoLuong','Gia','AnhDaiDien','MaChuyenMuc'];
    public function sanPhams()
    {
        return $this->belongsTo(SanPham::class, 'MaSanPham', 'MaSanPham');
    }
    public $timestamps = false; // Tắt tự động cập nhật thời gian
}
