<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcela', function (Blueprint $table) {
            $table->id('parcela_id')->autoIncrement();
            $table->string('parcela_lote', 45);
            $table->bigInteger('parcela_tamanho_ha');
            $table->bigInteger('parcela_capacidade_producao_m2');  
            $table->unsignedBigInteger('campo_id');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('campo_id')->references('campo_id')->on('campo');
            $table->foreign('estado_id')->references('estado_id')->on('estado');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcela');
    }
}
