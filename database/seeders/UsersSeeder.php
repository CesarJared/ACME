<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;//para encriptar

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Administrador Pacifico',
            'email'=>'admin_pacifico@gmail.com',
            'password'=>Hash::make('123'),
            'img_profile'=>'default.jpg',
            'id_zone'=>4,
        ]);

        DB::table('users')->insert([
            'name'=>'Administrador Norte',
            'email'=>'admin_norte@gmail.com',
            'password'=>Hash::make('123'),
            'img_profile'=>'default.jpg',
            'id_zone'=>2,
        ]);

        DB::table('users')->insert([
            'name'=>'Administrador Sur',
            'email'=>'admin_sur@gmail.com',
            'password'=>Hash::make('123'),
            'img_profile'=>'default.jpg',
            'id_zone'=>5,
        ]);
    }
}
