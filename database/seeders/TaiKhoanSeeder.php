<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;


class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Admin',
            'email' => 'admin@gmail.com',
            'sdt' => '0123456789',
            'Ten_dang_nhap' => 'admin',
            'password' => Hash::make('admin'),
            'id_phan_quyen' => '1',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Nguyễn Văn Thạnh',
            'email' => 'nguyenvanthanh@gmail.com',
            'sdt' => '0123456788',
            'Ten_dang_nhap' => 'bang',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Nguyễn Văn Thạnh 2',
            'email' => 'nguyenvanthanh2@gmail.com',
            'sdt' => '0123456787',
            'Ten_dang_nhap' => 'bang2',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Nguyễn Văn Thạnh 3',
            'email' => 'nguyenvanthanh3@gmail.com',
            'sdt' => '0123456786',
            'Ten_dang_nhap' => 'bang3',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Nguyễn Văn Thạnh 4',
            'email' => 'nguyenvanthanhg@gmail.com',
            'sdt' => '0123456785',
            'Ten_dang_nhap' => 'bang4',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);
        
        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Nguyễn Văn Thạnh 5',
            'email' => 'nguyenvanthanh5@gmail.com',
            'sdt' => '0123456784',
            'Ten_dang_nhap' => 'bang5',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);
    }
}
	
