<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->bigInteger('id_cliente')->nullable();
            $table->bigInteger('id_empleado')->nullable();
            $table->bigInteger('id_producto')->nullable();            
            $table->timestamps();
        });
        Schema::table('pedidos', function($table)
        {
            $table->foreign('id_cliente')->on('id')->references('cliente');
            $table->foreign('id_empleado')->on('id')->references('empleado');
            $table->foreign('id_producto')->on('id')->references('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
