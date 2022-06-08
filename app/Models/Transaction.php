<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama_wisata',
        'bukti_pembayaran',
        'total_ticket',
        'status',
    ];
}
