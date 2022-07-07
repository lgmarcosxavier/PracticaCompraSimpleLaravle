<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoteInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lote_insumo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_compra');
            $table->date('fecha_vencimiento')->nullable();
            $table->unsignedBigInteger('id_insumo');
            $table->string('no_lote', 45)->nullable();
            $table->bigInteger('cantidad');
            $table->bigInteger('existencia');
            $table->unsignedDecimal('precio_compra', 10, 2);
            $table->unsignedDecimal('descuento', 10, 2);
            $table->unsignedDecimal('subtotal', 10, 2);
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
        Schema::dropIfExists('lote_insumo');
    }
}
