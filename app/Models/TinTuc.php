<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table='tintuc';
    protected $primaryKey = 'MaTinTuc';
    protected $fillable = ['MaTinTuc', 'TieuDe','NoiDung','',''];
}
