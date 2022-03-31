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
        Schema::create('juego_proveedor', function (Blueprint $table) {
            $table->id('id_juego_proveedor');
            $table->unsignedBigInteger('id_juego')->nullable();
            $table->unsignedBigInteger('id_proveedor')->nullable();
            
            $table->foreign('id_juego')->references('id_juego')
            ->on('juegos_mesa')
            ->onDelete('set null');

            $table->foreign('id_proveedor')->references('id_proveedor')
            ->on('proveedor_tabla')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juego_proveedor');
    }
};
