<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor_model;
use Illuminate\Support\Facades\DB;

class Provedor_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>1,
           'Nombre_proveedor'=>'KOSMOS - DEVIR IBÉRICA (distribución en España)',
           'Direccion'=>'C. Elisa, Carmen, Benito Juárez, 03540 Ciudad de México, CDMX',
        ]); 

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>2,
           'Nombre_proveedor'=>'Hasbro',
           'Direccion'=>'Carr. Federal Pachuca - Mexico Km 36.5, Hueyotenco, 55749 Tecámac de Felipe Villanueva, Méx.',
        ]); 

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>3,
           'Nombre_proveedor'=>'Ningbo Yinzhou BSL Paper Products Co., Ltd',
           'Direccion'=>'浙江省宁波市江东区中兴路717号华宏国际中心5层09',
        ]); 

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>4,
           'Nombre_proveedor'=>'Hasbro',
           'Direccion'=>'Carr. Federal Pachuca - Mexico Km 36.5, Hueyotenco, 55749 Tecámac de Felipe Villanueva, Méx.',
        ]); 

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>5,
           'Nombre_proveedor'=>'Hasbro',
           'Direccion'=>'Carr. Federal Pachuca - Mexico Km 36.5, Hueyotenco, 55749 Tecámac de Felipe Villanueva, Méx.',
        ]); 

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>6,
           'Nombre_proveedor'=>'Dominos Azteca',
           'Direccion'=>'Av. de los 100 Metros, Panamericana, Gustavo A. Madero, 07770 Ciudad de México, CDMX',
        ]); 

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>7,
           'Nombre_proveedor'=>'Hasbro',
           'Direccion'=>'Carr. Federal Pachuca - Mexico Km 36.5, Hueyotenco, 55749 Tecámac de Felipe Villanueva, Méx.',
        ]); 

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>8,
           'Nombre_proveedor'=>'Mattel',
           'Direccion'=>'Av Tejocotes S/N San Martin Obispo 54769 Cuautitlán Izcalli Méx.',
        ]);

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>9,
           'Nombre_proveedor'=>'Mattel',
           'Direccion'=>'Av Tejocotes S/N San Martin Obispo 54769 Cuautitlán Izcalli, Méx.',
        ]);        

        DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>10,
           'Nombre_proveedor'=>'KOSMOS - DEVIR IBÉRICA (distribución en España)',
           'Direccion'=>'C. Elisa Carmen Benito Juárez 03540 Ciudad de México CDMX',
        ]);

         DB::table('proveedor_tabla')->insert([
           'id_proveedor'=>11,
           'Nombre_proveedor'=>'Mattel',
           'Direccion'=>'Av Tejocotes S/N San Martin Obispo 54769 Cuautitlán Izcalli, Méx.',
        ]);
    }
}
