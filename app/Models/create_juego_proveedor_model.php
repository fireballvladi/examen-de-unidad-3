<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_juego_proveedor_model extends Model
{
    use HasFactory;
    protected $table=juego_proveedor;

    //uno a muchos inverso
    public function Juego{
        return $this->belongsTo('app/Models/Juego_Mesa_model');
    }

    public function proveedorl{
        return $this->belongsTo('app/Models/provedor_model');
    }
}
