<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTablePublicacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign(['publicacao']);
            $table->foreign('publicacao')
                ->references('id')
                ->on('publicacao')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->change();
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
