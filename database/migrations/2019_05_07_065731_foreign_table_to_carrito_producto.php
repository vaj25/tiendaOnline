<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignTableToCarritoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('to_carrito_producto', function (Blueprint $table) {
          $table->bigInteger('id_carrito')->unsigned();
          $table->foreign('id_carrito')->references('id_carrito')->on('to_carrito');
          $table->bigInteger('id_producto')->unsigned();
          $table->foreign('id_producto')->references('id_producto')->on('to_producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('to_carrito_producto', function (Blueprint $table) {
            //
        });
    }
}
