<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table='khachhang';
    protected $primaryKey = 'MaKhachHang';
    protected $fillable = ['MaKhachHang', 'TenKhachHang','GioiTinh','DiaChi','SDT','Email'];
    public $timestamps = false; // Tắt tự động cập nhật thời gian
}
