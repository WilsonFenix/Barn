<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefa', function (Blueprint $table) {
            $table->id('tarefa_id')->autoIncrement();
            $table->string('tarefa_nome', 45);
            $table->timestamp('tarefa_data_definicao')->useCurrent();
            $table->timestamp('tarefa_data_inicio')->useCurrent();
            $table->timestamp('tarefa_data_fim_previsto');
            $table->timestamp('tarefa_data_conclusao');
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
        Schema::dropIfExists('tarefa');
    }
}
