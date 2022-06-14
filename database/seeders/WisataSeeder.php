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
                'deskripsi'=>'Kebun binatang kecil dengan harimau, reptil & kandang burung eksotis, plus taman hiburan & naik kuda poni.',
                'alamat' => 'Lembang, Bandung, Jawa Barat',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -6.805898370865204,
                'longitude' => 107.59190729100936,
                'open' => "07.00",
                'close' => "18.00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Firdaus Putra',
                'nama_wisata' => 'Jurug',
                'stock_tiket'=>1600,
                'harga_tiket'=>10000,
                'deskripsi'=>'Keindahan alam Bumi Menak Sopal Trenggalek sudah tidak diragukan lagi. Salah satu wisata alam di Trenggalek yang cukup menarik perhatian adalah Jurug Waru Dongko yang ada di Desa Watuagung, Kecamatan Dongko.',
                'alamat' => 'Trenggalek, Jawa Timur',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -8.244800905128505,
                'longitude' => 111.52170583479285,
                'open' => "07.00",
                'close' => "18.00",
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
                'latitude' => -6.736712712842443,
                'longitude' => 108.54312745537794,
                'open' => "07.00",
                'close' => "18.00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Ignasius Nindra',
                'nama_wisata' => 'Lawang Sewu',
                'stock_tiket'=>2000,
                'harga_tiket'=>30000,
                'deskripsi'=>'Lawang Sewu adalah gedung bersejarah milik PT Kereta Api Indonesia (Persero) yang awalnya digunakan sebagai Kantor Pusat perusahaan kereta api swasta Nederlandsch-Indische Spoorweg Maatschappij (NISM). Gedung Lawang Sewu dibangun secara bertahap di atas lahan seluas 18.232 m2.',
                'alamat' => 'Solo, Jawa Tengah',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -6.983909927689964,
                'longitude' => 110.41043561033719,
                'open' => "07.00",
                'close' => "18.00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
