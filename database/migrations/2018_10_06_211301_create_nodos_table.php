<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodos', function (Blueprint $table) {
            $table->increments('id');
			$table->string("nombre");
			$table->string("latitud",255);
			$table->string("longitud",255);
			$table->integer("tipo_nodo");//Tipos[0,1,2] donde 0: inicial; 1: normal; 2: final
			$table->unsignedInteger("nodo_anterior")->nullable();
			$table->unsignedInteger("nodo_siguiente")->nullable();
			$table->unsignedInteger("app_id");
            $table->timestamps();
			
			 $table->foreign('nodo_anterior')->references('id')->on('nodos');
			 $table->foreign('nodo_siguiente')->references('id')->on('nodos');
			 $table->foreign('app_id')->references('id')->on('apps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodos');
    }
}
