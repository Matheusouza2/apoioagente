<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateComissaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comissao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data');
            $table->String('categoria');
            $table->double('valor');
            $table->bigInteger('usuario')->unsigned();
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
        //
    }
}
