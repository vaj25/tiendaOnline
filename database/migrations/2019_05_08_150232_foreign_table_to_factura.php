<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignTableToFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('to_factura', function (Blueprint $table) {
          $table->bigInteger('id_carrito')->unsigned();
          $table->foreign('id_carrito')->references('id_carrito')->on('to_carrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('to_factura', function (Blueprint $table) {
            //
        });
    }
}
