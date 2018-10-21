<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresa extends Migration
{

    public function up()
    {
                
        Schema::create('Empresa',function(Blueprint $table){
            $table->increments('Id_empresa');
            $table->string('nomb_emp');
            $table->string('ubicacion');
            $table->integer('CP');
            $table->integer('Telefono');
            $table->rememberToken();
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Empresa');
    }
}
