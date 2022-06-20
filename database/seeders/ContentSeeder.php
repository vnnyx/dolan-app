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
                'content'=>'https://dolanyok.com/wp-content/uploads/2019/01/Grojokan-Sewu-sialirahman.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Pariwisata',
                'nama_wisata'=>'Grojogan Sewu',
                'content'=>'https://cdn.nativeindonesia.com/foto/2018/08/air-terjun-grojogan-sewu-tawangmangu.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Pariwisata',
                'nama_wisata'=>'Grojogan Sewu',
                'content'=>'https://bob.kemenparekraf.go.id/wp-content/uploads/2021/05/81678452_234709720851642_591501723124068380_n.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Balai Besar Taman Nasional Bromo',
                'nama_wisata'=>'Gunung Bromo',
                'content'=>'https://unsplash.com/photos/dzFB8xeWg1M',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Balai Besar Taman Nasional Bromo',
                'nama_wisata'=>'Gunung Bromo',
                'content'=>'https://unsplash.com/photos/5tAGrREDQbs',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Balai Besar Taman Nasional Bromo',
                'nama_wisata'=>'Gunung Bromo',
                'content'=>'https://unsplash.com/photos/EYHMtABHYf8',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Riset Nasional',
                'nama_wisata'=>'Kebun Raya Bogor',
                'content'=>'https://unsplash.com/photos/IQJaEIc-WXw',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Riset Nasional',
                'nama_wisata'=>'Kebun Raya Bogor',
                'content'=>'https://unsplash.com/photos/rv-q5rWRcoI',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Riset Nasional',
                'nama_wisata'=>'Kebun Raya Bogor',
                'content'=>'https://unsplash.com/photos/iANAdaNu7mg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'telagawarna',
                'nama_wisata'=>'Telaga Warna',
                'content'=>'https://cdn.nativeindonesia.com/foto/telaga-warna-dieng/Telaga-Warna-Dieng.jpeg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'telagawarna',
                'nama_wisata'=>'Telaga Warna',
                'content'=>'https://cdn.langit7.id/foto/850/langit7/berita/2021/09/28/1/4752/telaga-warna-dieng-dibuka-untuk-wisatawan-dengan-protokol-kesehatan-rwc.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'telagawarna',
                'nama_wisata'=>'Telaga Warna',
                'content'=>'https://liburanyuk.co.id/wp-content/uploads/2021/04/telaga-warna-dieng-653x393.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'heritage',
                'nama_wisata'=>'The Heritage Palace',
                'content'=>'https://salsawisata.b-cdn.net/wp-content/uploads/2021/06/The-Heritage-Palace-Solo.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'heritage',
                'nama_wisata'=>'The Heritage Palace',
                'content'=>'https://img.beritasatu.com/cache/investor/798x449-2/1612027039.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'heritage',
                'nama_wisata'=>'The Heritage Palace',
                'content'=>'https://prambanantrans.com/wp-content/uploads/2019/09/wisata-jogja-terbaru_670.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Perhutani',
                'nama_wisata'=>'Lawu Park',
                'content'=>'https://asset.kompas.com/crops/36p_cKZSBR80mJ8Mni6cRiPRq34=/68x0:755x458/750x500/data/photo/2021/05/06/609377da73201.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Perhutani',
                'nama_wisata'=>'Lawu Park',
                'content'=>'https://asset.kompas.com/crops/Yq9tsZ0UlTIXob_oO4wsDPQmJp4=/0x8:1024x691/750x500/data/photo/2019/07/31/5d4146922bded.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Perhutani',
                'nama_wisata'=>'Lawu Park',
                'content'=>'https://www.javatravel.net/wp-content/uploads/2022/01/The-Lawu-Park-Tawangmangu.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Otorita Borobudur',
                'nama_wisata'=>'Seribu Batu',
                'content'=>'https://cdn.nativeindonesia.com/foto/2018/09/Songgolangit_View.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Otorita Borobudur',
                'nama_wisata'=>'Seribu Batu',
                'content'=>'https://cdn-2.tstatic.net/travel/foto/bank/images/wisata-seribu-batu-songgo-langit.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Badan Otorita Borobudur',
                'nama_wisata'=>'Seribu Batu',
                'content'=>'https://visitingjogja.jogjaprov.go.id/web/wp-content/uploads/2020/12/150252606_113710817391496_2339918856594404314_n.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'sangiran',
                'nama_wisata'=>'Situs Sangiran',
                'content'=>'https://unsplash.com/photos/hwg4_tU3gpo',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'sangiran',
                'nama_wisata'=>'Situs Sangiran',
                'content'=>'https://unsplash.com/photos/-kP2avpkcrE',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'sangiran',
                'nama_wisata'=>'Situs Sangiran',
                'content'=>'https://unsplash.com/photos/1J4oDPRlFQw',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'tanahlot',
                'nama_wisata'=>'Tanah Lot',
                'content'=>'https://unsplash.com/photos/vVkayXvZnwQ',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'tanahlot',
                'nama_wisata'=>'Tanah Lot',
                'content'=>'https://unsplash.com/photos/rx1hqu2L_KY',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'tanahlot',
                'nama_wisata'=>'Tanah Lot',
                'content'=>'https://unsplash.com/photos/CRqFC5HohC8',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
