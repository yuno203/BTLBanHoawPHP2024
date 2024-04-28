<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table='SanPham';
    protected $primaryKey = 'MaSanPham';
    protected $fillable = ['MaSanPham', 'TenSanPham','AnhDaiDien','SoLuong','Gia','MaChuyenMuc',''];
    public function chuyenMuc()
    {
        return $this->belongsTo(ChuyenMuc::class, 'MaChuyenMuc', 'MaChuyenMuc');
    }
}
