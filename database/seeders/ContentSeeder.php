<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            [
                'username'=>'Yogi Firgiawan',
                'nama_wisata'=>'Gua Sunyaragi',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1650280214/abp/Landmark-Gua-Sunyaragi_zanqnq.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Yogi Firgiawan',
                'nama_wisata'=>'Gua Sunyaragi',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1650280252/abp/2-3-by-indi_jalanjalan_q7ihng.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Yogi Firgiawan',
                'nama_wisata'=>'Gua Sunyaragi',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1650280289/abp/Kawasan-Gua-Sunyaragi-Ahmad-Rasyid_z3dhvw.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Muhammad Aryuska',
                'nama_wisata'=>'Lembang Zoo Park',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130575/abp/5e2d3bc107798_zww2bh.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Muhammad Aryuska',
                'nama_wisata'=>'Lembang Zoo Park',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130575/abp/Lembang-Park-Zoo-Bandung_dtgduo.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Muhammad Aryuska',
                'nama_wisata'=>'Lembang Zoo Park',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130575/abp/429818817_iirru5.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Firdaus Putra',
                'nama_wisata'=>'Jurug',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130728/abp/sedang_1502986552ju_vqbrvt.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Firdaus Putra',
                'nama_wisata'=>'Jurug',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130728/abp/jurug-waru-trenggalek-jawa-timur_lt5xex.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Firdaus Putra',
                'nama_wisata'=>'Jurug',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130727/abp/20c69588-5735-4d55-8e2e-a4fd19bbc366_169_gsrpjg.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Ignasius Nindra',
                'nama_wisata'=>'Lawang Sewu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130843/abp/cover_13_iaw9ys.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Ignasius Nindra',
                'nama_wisata'=>'Lawang Sewu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130843/abp/5f06e3f4c5898jpg-20210914021347_beh5iy.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Ignasius Nindra',
                'nama_wisata'=>'Lawang Sewu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655130843/abp/5ea13b83807c8_yeqqgr.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Pariwisata',
                'nama_wisata'=>'Grojogan Sewu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705772/abp/destination/81678452_234709720851642_591501723124068380_n_wl0ebe.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Pariwisata',
                'nama_wisata'=>'Grojogan Sewu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705771/abp/destination/Grojokan-Sewu-sialirahman_w1dau6.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Pariwisata',
                'nama_wisata'=>'Grojogan Sewu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705771/abp/destination/air-terjun-grojogan-sewu-tawangmangu_rkyi8o.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Balai Besar Taman Nasional Bromo',
                'nama_wisata'=>'Gunung Bromo',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705636/abp/destination/kevin-zhang-dzFB8xeWg1M-unsplash_gombos.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Balai Besar Taman Nasional Bromo',
                'nama_wisata'=>'Gunung Bromo',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705633/abp/destination/alessio-roversi-EYHMtABHYf8-unsplash_u1zg8a.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Balai Besar Taman Nasional Bromo',
                'nama_wisata'=>'Gunung Bromo',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705632/abp/destination/fajruddin-mudzakkir-5tAGrREDQbs-unsplash_wpxvgu.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Riset Nasional',
                'nama_wisata'=>'Kebun Raya Bogor',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705911/abp/destination/scott-webb-rv-q5rWRcoI-unsplash_bg3z76.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Riset Nasional',
                'nama_wisata'=>'Kebun Raya Bogor',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705906/abp/destination/sonnie-hiles-iANAdaNu7mg-unsplash_kdcatg.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Riset Nasional',
                'nama_wisata'=>'Kebun Raya Bogor',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705905/abp/destination/soff-garavano-puw-IQJaEIc-WXw-unsplash_iutqxm.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'telagawarna',
                'nama_wisata'=>'Telaga Warna',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706374/abp/destination/Telaga-Warna-Dieng_bxvxvi.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'telagawarna',
                'nama_wisata'=>'Telaga Warna',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706374/abp/destination/telaga-warna-dieng-dibuka-untuk-wisatawan-dengan-protokol-kesehatan-rwc_xvkdad.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'telagawarna',
                'nama_wisata'=>'Telaga Warna',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706374/abp/destination/telaga-warna-dieng-653x393_xw6yos.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'heritage',
                'nama_wisata'=>'The Heritage Palace',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706489/abp/destination/wisata-jogja-terbaru_670_vwauih.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'heritage',
                'nama_wisata'=>'The Heritage Palace',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706489/abp/destination/1612027039_az0us1.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'heritage',
                'nama_wisata'=>'The Heritage Palace',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706489/abp/destination/The-Heritage-Palace-Solo_mezowf.webp',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Perhutani',
                'nama_wisata'=>'Lawu Park',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706050/abp/destination/The-Lawu-Park-Tawangmangu_x6rq6k.webp',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Perhutani',
                'nama_wisata'=>'Lawu Park',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706050/abp/destination/609377da73201_bsvknm.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Perhutani',
                'nama_wisata'=>'Lawu Park',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706049/abp/destination/5d4146922bded_q9fqah.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Otorita Borobudur',
                'nama_wisata'=>'Seribu Batu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706262/abp/destination/Songgolangit_View_lq4lof.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Otorita Borobudur',
                'nama_wisata'=>'Seribu Batu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706262/abp/destination/150252606_113710817391496_2339918856594404314_n_lu47xn.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Otorita Borobudur',
                'nama_wisata'=>'Seribu Batu',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706262/abp/destination/wisata-seribu-batu-songgo-langit_bclb1n.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'sangiran',
                'nama_wisata'=>'Situs Sangiran',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706153/abp/destination/stacey-weber-1J4oDPRlFQw-unsplash_dbfv8o.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'sangiran',
                'nama_wisata'=>'Situs Sangiran',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706153/abp/destination/alexander-schimmeck--kP2avpkcrE-unsplash_hy04v4.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'sangiran',
                'nama_wisata'=>'Situs Sangiran',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655706150/abp/destination/alexander-schimmeck-hwg4_tU3gpo-unsplash_ncaa0w.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'tanahlot',
                'nama_wisata'=>'Tanah Lot',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705495/abp/destination/ludo-poire-rx1hqu2L_KY-unsplash_aczapd.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'tanahlot',
                'nama_wisata'=>'Tanah Lot',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705494/abp/destination/nick-fewings-vVkayXvZnwQ-unsplash_plcxlc.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'tanahlot',
                'nama_wisata'=>'Tanah Lot',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1655705493/abp/destination/eyestetix-studio-CRqFC5HohC8-unsplash_yemhmz.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
