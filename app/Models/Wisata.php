<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama_wisata',
        'alamat',
        'harga_tiket',
        'stock_tiket',
        'deskripsi',
        'credential',
    ];
}
