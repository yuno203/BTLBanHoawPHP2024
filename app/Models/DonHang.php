<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    protected $table = 'donhang';
    protected $primaryKey = 'MaDonHang';
    protected $fillable = ['MaDonHang', 'NgayDatHang','MaKhachHang','MaTrangThaiDonHang'];
    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKhachHang', 'MaKhachHang');
    }
    public function chiTietDonHang()
    {
        return $this->hasMany(ChiTietDonHang::class, 'MaDonHang', 'MaDonHang');
    }
    public function trangThaiDonHang()
    {
        return $this->belongsTo(TrangThaiDonHang::class, 'MaTrangThaiDonHang', 'MaTrangThaiDonHang');
    }
    public $timestamps = false; // Tắt tự động cập nhật thời gian
    public function gioHang()
    {
        return $this->hasMany(GioHang::class, 'MaGioHang', 'MaGioHang');
    }
}
