<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor_model extends Model
{
    use HasFactory;
    protected $table=proveedor_tabla;

    // uno a muchos

    public function juego_provedor(){
        return $this->hasMany('app/Models/create_juego_provedor_model');

    }
}
