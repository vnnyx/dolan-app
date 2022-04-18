<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wisatas')->insert([
            [
                'username' => 'Muhammad Aryuska',
                'nama_wisata' => 'Lembang Zoo Park',
                'stock_tiket'=>1000,
                'harga_tiket'=>40000,
                'deskripsi'=>null,
                'alamat' => 'Lembang, Bandung, Jawa Barat',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Firdaus Putra',
                'nama_wisata' => 'Jurug',
                'stock_tiket'=>1600,
                'harga_tiket'=>10000,
                'deskripsi'=>null,
                'alamat' => 'Trenggalek, Jawa Timur',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Yogi Firgiawan',
                'nama_wisata' => 'Gua Sunyaragi',
                'stock_tiket'=>1600,
                'harga_tiket'=>12000,
                'deskripsi'=>'Gua Sunyaragi, Gua Bersejarah Yang Unik Dengan Mitos Perjodohannya',
                'alamat' => 'Cirebon, Jawa Barat',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Ignasius Nindra',
                'nama_wisata' => 'Lawang Sewu',
                'stock_tiket'=>2000,
                'harga_tiket'=>30000,
                'deskripsi'=>null,
                'alamat' => 'Solo, Jawa Tengah',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
