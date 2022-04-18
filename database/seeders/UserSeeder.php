<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username'=>'Admin One',
                'email'=>'admin1@email.com',
                'password'=>bcrypt('password'),
                'role'=>'admin',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Admin Two',
                'email'=>'admin2@email.com',
                'password'=>bcrypt('password'),
                'role'=>'admin',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Ignasius Nindra',
                'email'=>'nindra@email.com',
                'password'=>bcrypt('password'),
                'role'=>'owner',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Muhammad Aryuska',
                'email'=>'ryu@email.com',
                'password'=>bcrypt('password'),
                'role'=>'owner',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Yogi Firgiawan',
                'email'=>'yogi@email.com',
                'password'=>bcrypt('password'),
                'role'=>'owner',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'Firdaus Putra',
                'email'=>'daus@email.com',
                'password'=>bcrypt('password'),
                'role'=>'owner',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'User One',
                'email'=>'userone@email.com',
                'password'=>bcrypt('password'),
                'role'=>'user',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'User Two',
                'email'=>'usertwo@email.com',
                'password'=>bcrypt('password'),
                'role'=>'user',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'User Three',
                'email'=>'userthree@email.com',
                'password'=>bcrypt('password'),
                'role'=>'user',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ]);
    }
}
