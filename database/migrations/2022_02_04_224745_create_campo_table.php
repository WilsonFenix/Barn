<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campo', function (Blueprint $table) {
            $table->id('campo_id')->autoIncrement();
            $table->string('campo_nome', 45);
            $table->string('campo_lote',45);
            $table->string('campo_endereco',45);
            $table->bigInteger('campo_tamanho_total_ha');
            $table->bigInteger('campo_capacidade_producao_toneladas');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campo');
    }
}
