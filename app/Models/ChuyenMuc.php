<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenMuc extends Model
{
    use HasFactory;
    protected $table = 'chuyenmuc';
    protected $primaryKey = 'MaChuyenMuc';
    protected $fillable = ['MaChuyenMuc', 'TenChuyenMuc'];
    public function sanPhams()
    {
        return $this->hasMany(SanPham::class, 'MaChuyenMuc', 'MaChuyenMuc');
    }
    public $timestamps = false; // Tắt tự động cập nhật thời gian
}
