<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaPrima extends Migration
{

    public function up()
    {
        Schema::create('Materia_prima', function (Blueprint $table){
       $table->increments('Id_mat');
       $table->string('nom_mat');
       $table->string('descripcion');
       $table->integer('cantidad');
       $table->float('peso',4,2);
       $table->date('fecha');
       $table->integer('Id_pig')->unsigned(); //Llave foranea Orden Produccion
       $table->foreign('Id_pig')->references('Id_pig')->on('Pigmentos');
       $table->rememberToken();
		    $table->timestamps();
       
        });
    }

 
    public function down()
    {
        Schema::drop('Materia_prima');
    }
}
