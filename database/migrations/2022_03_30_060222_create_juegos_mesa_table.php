<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos_mesa', function (Blueprint $table) {
            $table->id('id_juego');
            $table->string('Nombre_Juego');
            $table->string('Numero_Jugadores');
            $table->string('Numero_Piezas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juegos_mesa');
    }
};
