<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('publicacao')->unsigned();
            $table->bigInteger('usuario')->unsigned();
            $table->date('data');
            $table->text('comentario');
            $table->foreign('publicacao')->references('id')->on('publicacao')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('usuario')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
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
