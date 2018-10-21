<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdenProduccion extends Migration
{

    public function up()
    {
      Schema::create('Orden_produccion', function (Blueprint $table){
                    $table->increments('Id_OP');
                    $table->date('fecha_inicio');
                    $table->date('fecha_salida');
                    $table->integer('Id_proceso')->unsigned(); //Llave foranea Orden Produccion
                    $table->foreign('Id_proceso')->references('Id_proceso')->on('Procesos');
                    $table->integer('Id_emp')->unsigned(); //Llave foranea Orden Produccion
                    $table->foreign('Id_emp')->references('Id_emp')->on('Empleados');
                    $table->integer('Id_campana')->unsigned(); //Llave foranea 
                    $table->foreign('Id_campana')->references('Id_campana')->on('Campañas');
                    $table->rememberToken();
                    $table->timestamps();
    });  
    }

    
    public function down()
    {
        Schema::drop('Orden_produccion'); 
    }
}
