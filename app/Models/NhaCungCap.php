<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;
    protected $table='nhacungcap';
    protected $primaryKey = 'MaNhaCungCap';
    protected $fillable = ['MaNhaCungCap', 'TenNhaCungCap','DiaChi','SoDienThoai','Fax','MoTa'];
}
