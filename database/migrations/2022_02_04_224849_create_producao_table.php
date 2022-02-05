<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producao', function (Blueprint $table) {
            $table->id('producao_id')->autoIncrement();
            $table->bigInteger('producao_quantidade_toneladas');
            $table->timestamp('producao_data')->useCurrent();
            $table->unsignedBigInteger('trabalhador_id');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('parcela_id');
            $table->foreign('estado_id')->references('estado_id')->on('estado');
            $table->foreign('trabalhador_id')->references('trabalhador_id')->on('trabalhador');
            $table->foreign('parcela_id')->references('parcela_id')->on('parcela');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producao');
    }
}
