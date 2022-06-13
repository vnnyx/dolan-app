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
        ]);
    }
}
