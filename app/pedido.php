<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\cliente', 'id_cliente');
    }
    public function producto()
    {
        return $this->belongsTo('App\producto', 'id_producto');
    }
    public function empleado()
    {
        return $this->belongsTo('App\empleado', 'id_empleado');
    }
}

