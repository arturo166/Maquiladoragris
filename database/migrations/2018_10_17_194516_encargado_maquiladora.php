<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EncargadoMaquiladora extends Migration
{
    
    public function up()
    {
       Schema::create('Encargado_maquiladora', function (Blueprint $table) {
            $table->increments('Id_em');
		    $table->string('Nom_enc');
			$table->string('Ap_penc');
			$table->string('Ap_menc');
			$table->string('RFC_enc');
            $table->integer('Id_empresa')->unsigned();
		    $table->foreign('Id_empresa')->references('Id_empresa')->on('Empresa');
					
			$table->rememberToken();
		    $table->timestamps();
        });
    }

 
    public function down()
    {
         Schema::drop('Encargado_maquiladora');
    }
}
