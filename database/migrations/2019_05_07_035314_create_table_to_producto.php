<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableToProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_producto', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre_producto', 100);
            $table->decimal('precio_producto', 8, 2);
            $table->text('descripcion_producto');
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
        Schema::dropIfExists('to_producto');
    }
}
