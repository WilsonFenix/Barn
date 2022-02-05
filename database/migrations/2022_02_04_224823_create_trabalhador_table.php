<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhador', function (Blueprint $table) {
            $table->id('trabalhador_Id')->autoIncrement();
            $table->string('trabalhador_nome', 45);
            $table->string('trabalhador_bi',45);
            $table->bigInteger('trabalhador_n_contrato');
            $table->float('trabalhador_salrio_base');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('estado_id')->on('estado');
            $table->foreign('usuario_id')->references('usuario_id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabalhador');
    }
}
