<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteDestination extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama_wisata'
    ];
}
