<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNodeNode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_node', function (Blueprint $table) {
            $table->integer("nodo_principal");
			$table->integer("nodo_vertice");
            $table->timestamps();
			
			$table->primary(['nodo_principal', 'nodo_vertice']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('node_node');
    }
}
