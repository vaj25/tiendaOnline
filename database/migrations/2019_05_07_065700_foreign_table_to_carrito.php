<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignTableToCarrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('to_carrito', function (Blueprint $table) {
          $table->bigInteger('id_cliente')->unsigned();
          $table->foreign('id_cliente')->references('id_cliente')->on('to_cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('to_carrito', function (Blueprint $table) {
            //
        });
    }
}
