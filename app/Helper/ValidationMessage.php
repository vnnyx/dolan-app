<?php

namespace App\Helper;

class ValidationMessage
{
    public static function message(){
        return [
            'username.required'=>'Username harus diisi',
            'username.unique'=>'Username sudah digunakan',
            'email.required'=>'Email harus diisi',
            'email.unique'=>'Email sudah digunakan',
            'password.min'=>'Panjang password minimal 8',
            'password.required'=>'Password harus diisi',
            'password.confirmed'=>'Password tidak cocok',
            'total_amount.required'=>'Jumlah tiket harus diisi',
            'destination_id.required'=>'Tempat wisata harus diisi',
        ];
    }
}
