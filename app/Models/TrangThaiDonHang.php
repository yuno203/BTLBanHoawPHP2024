<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrangThaiDonHang extends Model
{
    use HasFactory;
    protected $table='trangthaidonhang';
    protected $primaryKey = 'MaTrangThaiDonHang';
    protected $fillable = ['MaTrangThaiDonHang', 'TenTrangThaiDonHang'];
}
