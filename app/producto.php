<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public function pedido()
    {
        return $this->hasMany('App\pedido');
    }   
}
