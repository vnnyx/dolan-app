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
                'open' => "07:00",
                'close' => "18:00",
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
                'open' => "07:00",
                'close' => "18:00",
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
                'open' => "07:00",
                'close' => "18:00",
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
                'open' => "07:00",
                'close' => "18:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Badan Pariwisata',
                'nama_wisata' => 'Grojogan Sewu',
                'stock_tiket'=>4000,
                'harga_tiket'=>20000,
                'deskripsi'=>'Grojogan Sewu merupakan air terjun yang berada di Provinsi Jawa Tengah.Terletak di Kecamatan Tawangmangu, Kabupaten Karanganyar, Jawa Tengah. Air terjun Grojogan Sewu terletak di lereng Gunung Lawu. Grojogan Sewu terletak sekitar 27 km di sebelah timur Kota Karanganyar. Air terjun Grojogan Sewu merupakan bagian dari Hutan Wisata Grojogan Sewu.',
                'alamat' => 'Karanganyar, Jawa Tengah',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -7.5934653403253405,
                'longitude' => 111.12810321634787,
                'open' => "08:00",
                'close' => "16:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Balai Besar Taman Nasional Bromo',
                'nama_wisata' => 'Gunung Bromo',
                'stock_tiket'=>4000,
                'harga_tiket'=>30000,
                'deskripsi'=>'Gunung Bromo adalah tempat yang sangat strategis untuk menyaksikan matahari terbit yang dikenal dengan sebutan Bromo Golden Sunrise. Untuk mencapai wiew point Pananjakan 1 kita harus menggunakan kendaraan Jeep yang memang satu-satunya kendaraan yang beroperasi untuk mengantarkan para wisatawan menuju tempat-tempat wisata utama di sekitar Gunung bromo.',
                'alamat' => 'Pasuruan, Jawa Timur',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -7.8442270236699345,
                'longitude' => 112.96967089286062,
                'open' => "07:00",
                'close' => "16:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Badan Riset Nasional',
                'nama_wisata' => 'Kebun Raya Bogor',
                'stock_tiket'=>40000,
                'harga_tiket'=>16500,
                'deskripsi'=>'Pada mulanya kebun ini hanya akan digunakan sebagai kebun percobaan bagi tanaman perkebunan yang akan diperkenalkan di Hindia Belanda. Namun pada perkembangannya pendirian Kebun Raya Bogor bisa dikatakan mengawali perkembangan ilmu pengetahuan di Indonesia dan sebagai wadah bagi ilmuwan terutama bidang botani di Indonesia secara terorganisasi pada zaman itu (1880 - 1905). Dari sini lahir beberapa institusi ilmu pengetahuan lain, seperti Bibliotheca Bogoriensis (1842), Herbarium Bogoriense (1844), Kebun Raya Cibodas (1860), Laboratorium Treub (1884), dan Museum dan Laboratorium Zoologi (1894).',
                'alamat' => 'Bogor, Jawa Barat',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -6.597194324865832,
                'longitude' => 106.79952423814228,
                'open' => "07:00",
                'close' => "16:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'telagawarna',
                'nama_wisata' => 'Telaga Warna',
                'stock_tiket'=>4000,
                'harga_tiket'=>15000,
                'deskripsi'=>'Telaga Warna terletak di Dataran Tinggi Dieng, tepatnya di Desa Dieng Wetan, Kecamatan Kejajar, Kabupaten Wonosobo, Jawa Tengah. Dengan ketinggian kurang lebih 2.000 meter di atas permukaan laut, Telaga Warna begitu asri dengan bukit-bukit hijau di sekitarnya.',
                'alamat' => 'Wonosobo, Jawa Tengah',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -7.128633807116949,
                'longitude' => 109.90798734684279,
                'open' => "08:00",
                'close' => "16:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'heritage',
                'nama_wisata' => 'The Heritage Palace',
                'stock_tiket'=>4000,
                'harga_tiket'=>30000,
                'deskripsi'=>'Kawasan The Herritage Palace ini merupakan bangunan cagar budaya (BCB) bekas pabrik gula peninggalan jaman kolonial Belanda. Bangunan ini berdiri sejak tahun 1892, dan mempunyai luas lahan sekitar 2,2 hektar. Sedikitnya ada sembilan bangunan kuno di area bekas pabrik gula ini, dan masih lengkap dengan cerobong asapnya setinggi 20 meter. Namun baru tiga bangunan yang dibuka untuk umum.',
                'alamat' => 'Sukoharjo, Jawa Tengah',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -7.351989699796229,
                'longitude' => 110.71275861469489,
                'open' => "10:00",
                'close' => "18:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Perhutani',
                'nama_wisata' => 'Lawu Park',
                'stock_tiket'=>4000,
                'harga_tiket'=>20000,
                'deskripsi'=>'The Lawu Park merupakan salah satu obyek wisata unggulan di Tawangmangu yang menyajikan destinasi wisata alam yang sering jadi incaran wisatawan. Hawa yang digin serta pemandangan yang asri menjadikan daya tarik sendiri dari obyek wisata The Lawu Park. Kalau kamu sedang berlibur di daerah Tawangmangu, Kabupaten Karanganyar, Jawa Tengah jangan lupa untuk mengunjungi The Lawu Park, ya. Panorama yang indah dijamin bikin rileks pikiran kamu, deh.',
                'alamat' => 'Karanganyar, Jawa Tengah',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -7.4494461968414045,
                'longitude' => 111.20881234726856,
                'open' => "08:00",
                'close' => "17:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'Badan Otorita Borobudur',
                'nama_wisata' => 'Seribu Batu',
                'stock_tiket'=>40000,
                'harga_tiket'=>3000,
                'deskripsi'=>'Mengambil konsep yang berbeda dari hutan pinus pada umumnya, hutan pinus Songgo Langit membuat konsep yang anti mainstream serta menarik. Jika biasanya setiap hutan pinus selalu menyediakan rumah pohon maupun gardun pandang di dalamnya. Maka berbeda dengan hutan pinus kali ini, Songgo Langit menyediakan fasilitas yang berbeda yaitu sebuah rumah hobbit yang tampak seperti rumah-rumah yang ada di Cideweuy Bandung dan Taman Kelinci Pujon Malang.',
                'alamat' => 'Bantul, Yogyakarta',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -7.904873190285384,
                'longitude' => 110.43168133609268,
                'open' => "06:00",
                'close' => "21:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'sangiran',
                'nama_wisata' => 'Situs Sangiran',
                'stock_tiket'=>40000,
                'harga_tiket'=>8000,
                'deskripsi'=>'Situs Sangiran merupakan salah satu situs Manusia Purba yang terbesar dan terpenting di dunia. Situs Sangiran terdapat di Kabupaten Sragen dan Karanganyar. Pada situs Sangiran telah ditemukan sebanyak sekitar 100 fosil manusia purba (Homo erectus) atau 50% lebih temuan fosil Homo erectus di dunia, dan lebih dari 60% yang ditemukan di Indonesia. Oleh karena kandungannya yang mempunyai nilai tinggi pada kesejarahan dan ilmu pengetahuan, maka Situs Sangiran telah ditetapkan sebagai daerah Cagar Budaya. Selain itu, UNESCO telah menetapkan Sangiran sebagai Warisan Budaya Dunia (World Culture Heritage).',
                'alamat' => 'Sragen, Jawa Tengah',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -7.226391641515805,
                'longitude' => 110.84967525001736,
                'open' => "08:00",
                'close' => "16:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username' => 'tanahlot',
                'nama_wisata' => 'Tanah Lot',
                'stock_tiket'=>4000,
                'harga_tiket'=>15000,
                'deskripsi'=>'Tanah Lot salah satu pura penting bagi umat Hindu Bali dan lokasi pura terletak di atas batu besar yang berada di lepas pantai. Pura Tanah Lot merupakan ikon pariwisata pulau Bali. Selain itu salah satu obyek wisata terkenal di pulau Bali yang wajib di kunjungi. Karena saking terkenalnya tempat wisata di Bali ini, maka hampir setiap hari, objek wisata ini selalu ramai dengan kunjungan wisatawan.',
                'alamat' => 'Tabanan, Bali',
                'credential' => 'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276457/abp/Sertifikat_Tech_Week__Webinar_YOGI_FIRGIAWAN_page-0001_b7rio0.jpg',
                'latitude' => -8.611479974499392,
                'longitude' => 115.08687131705595,
                'open' => "06:00",
                'close' => "19:00",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);

    }
}
