<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            'name'=>'Edificio B',
            'model'=>'modelo 41134-Alfa',
            'type'=>'edificio',
            'pages'=>10,
            'id_user'=>1,
            'id_zone'=>4,
            
        ]);

        DB::table('plans')->insert([
            'name'=>'Rascacielos S',
            'model'=>'modelo 445542-Omega',
            'type'=>'Rascacielos',
            'pages'=>100,
            'id_user'=>2,
            'id_zone'=>2,
            
        ]);

        DB::table('plans')->insert([
            'name'=>'Restaurante',
            'model'=>'modelo 57856-Beta',
            'type'=>'edificio',
            'pages'=>5,
            'id_user'=>3,
            'id_zone'=>5,
            
        ]);
    }
}
