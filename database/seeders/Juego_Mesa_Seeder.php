<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Juego_Mesa_model;
use Illuminate\Support\Facades\DB;
class Juego_Mesa_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('juegos_mesa')->insert([
           'id_juego'=>1,
           'Nombre_Juego'=>'Los Colonos de Catalan',
           'Numero_Jugadores'=>'5-6 Jugadores',
           'Numero_Piezas'=>'196 Piezas',
       ]);

        DB::table('juegos_mesa')->insert([
           'id_juego'=>2,
           'Nombre_Juego'=>'Monopoli',
           'Numero_Jugadores'=>'2-6 Jugadores',
           'Numero_Piezas'=>'110 Piezas',
       ]);

        DB::table('juegos_mesa')->insert([
           'id_juego'=>3,
           'Nombre_Juego'=>'Jenga',
           'Numero_Jugadores'=>'1-8 Jugadores',
           'Numero_Piezas'=>'54 Pieza',
       ]);
        
        DB::table('juegos_mesa')->insert([
           'id_juego'=>4,
           'Nombre_Juego'=>'Trivial Pursuit',
           'Numero_Jugadores'=>'2-6 Jugadores',
           'Numero_Piezas'=>'128 Piezas',
       ]);

        DB::table('juegos_mesa')->insert([
           'id_juego'=>5,
           'Nombre_Juego'=>'Risk',
           'Numero_Jugadores'=>'4-8 jugadores',
           'Numero_Piezas'=>'68 Piezas',
       ]);       

        DB::table('juegos_mesa')->insert([
           'id_juego'=>6,
           'Nombre_Juego'=>'Carcassonne',
           'Numero_Jugadores'=>'2-5 Jugadores',
           'Numero_Piezas'=>'104 Piezas',
       ]);       

        DB::table('juegos_mesa')->insert([
           'id_juego'=>7,
           'Nombre_Juego'=>'Cluedo',
           'Numero_Jugadores'=>'1-6 Jugadores',
           'Numero_Piezas'=>'51 Piezas',
       ]);

        DB::table('juegos_mesa')->insert([
           'id_juego'=>8,
           'Nombre_Juego'=>'Domino',
           'Numero_Jugadores'=>'2-4 Jugadores',
           'Numero_Piezas'=>'28 Piezas',
       ]);              

        DB::table('juegos_mesa')->insert([
           'id_juego'=>9,
           'Nombre_Juego'=>'Aventureros en el Tren',
           'Numero_Jugadores'=>'2-5 Juegadores',
           'Numero_Piezas'=>'338 Piezas',
        ]); 

        DB::table('juegos_mesa')->insert([
           'id_juego'=>10,
           'Nombre_Juego'=>'Pictionari',
           'Numero_Jugadores'=>'2-4 Jugadores',
           'Numero_Piezas'=>'338 Piezas',
        ]); 

        DB::table('juegos_mesa')->insert([
           'id_juego'=>11,
           'Nombre_Juego'=>'Scrablee',
           'Numero_Jugadores'=>'2-4 Jugadores',
           'Numero_Piezas'=>'102 Piezas',
        ]); 

    }
}
