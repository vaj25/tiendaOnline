<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableToFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_factura', function (Blueprint $table) {
            $table->bigIncrements('id_factura');
            $table->string('codigo_factura', 20);
            $table->decimal('total_factura', 8, 2);
            $table->decimal('subtotal_factura', 8, 2);
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
        Schema::dropIfExists('to_factura');
    }
}
