<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('usuario')->unsigned();
            $table->date('data');
            $table->text('publicacao');
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
