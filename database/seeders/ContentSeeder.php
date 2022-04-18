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
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1650280214/abp/Landmark-Gua-Sunyaragi_zanqnq.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Yogi Firgiawan',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1650280252/abp/2-3-by-indi_jalanjalan_q7ihng.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Yogi Firgiawan',
                'content'=>'https://res.cloudinary.com/dxbmfujzo/image/upload/v1650280289/abp/Kawasan-Gua-Sunyaragi-Ahmad-Rasyid_z3dhvw.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
