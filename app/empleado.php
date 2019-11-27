<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    public function pedido()
    {
        return $this->hasMany('App\pedido');
    }   
}
