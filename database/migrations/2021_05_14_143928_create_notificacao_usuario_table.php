<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacaoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacao_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('notificacao')->unsigned();
            $table->bigInteger('usuario')->unsigned();
            $table->integer('aceite');
            $table->foreign('usuario')->references('id')->on('usuario');
            $table->foreign('notificacao')->references('id')->on('notificacao');
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
        
    }
}
