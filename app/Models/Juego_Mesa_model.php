<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego_Mesa_model extends Model
{
    use HasFactory;
    protected $table=juegos_mesa;

    //uno a muchos

    public function juego_proveedor(){
        return $this->hasMany('app/Models/create_juego_provedor_model');
    }
}
