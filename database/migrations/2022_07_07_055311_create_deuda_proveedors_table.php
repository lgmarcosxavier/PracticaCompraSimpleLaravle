<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeudaProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deuda_proveedor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_compra')->nullable();
            $table->unsignedDecimal('debe', 10, 2);
            $table->unsignedDecimal('haber', 10, 2);
            $table->unsignedDecimal('saldo', 10, 2);
            $table->string('descripcion', 255);
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
        Schema::dropIfExists('deuda_proveedor');
    }
}
