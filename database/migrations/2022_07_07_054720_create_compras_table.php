<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proveedor');
            $table->date('fecha_compra');
            $table->date('fecha_recibe')->nullable();
            $table->unsignedDecimal('total_compra', 10, 2);
            $table->string('no_factura', 45)->nullable();
            $table->unsignedBigInteger('id_tipo_compra');
            $table->unsignedInteger('dias_credito')->nullable();
            $table->unsignedInteger('estado')->default(1);
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
        Schema::dropIfExists('compra');
    }
}
