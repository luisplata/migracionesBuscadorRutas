<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->increments('id');
			$table->string("nombre");
			$table->unsignedInteger("nodo_inicio_id");
			$table->unsignedInteger("nodo_final_id");
			$table->unsignedInteger("app_id");
            $table->timestamps();
			
			$table->foreign('nodo_inicio_id')->references('id')->on('nodos');
			$table->foreign('nodo_final_id')->references('id')->on('nodos');
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
        Schema::dropIfExists('rutas');
    }
}
