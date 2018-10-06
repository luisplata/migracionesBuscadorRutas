<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodosRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodos_rutas', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger("nodo_id");
			$table->unsignedInteger("ruta_id");
            $table->timestamps();
			
			$table->foreign('nodo_id')->references('id')->on('nodos');
			$table->foreign('ruta_id')->references('id')->on('rutas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodos_rutas');
    }
}
