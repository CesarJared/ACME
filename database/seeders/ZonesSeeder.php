<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insert Into ZONES(name) VALUES('Noroeste');
        DB::table('zones')->insert(['name'=>'Noroeste']);
        DB::table('zones')->insert(['name'=>'Norte']);
        DB::table('zones')->insert(['name'=>'Centro']);
        DB::table('zones')->insert(['name'=>'Pacifico']);
        DB::table('zones')->insert(['name'=>'Sur']);
        DB::table('zones')->insert(['name'=>'Golfo']);

    }
}
