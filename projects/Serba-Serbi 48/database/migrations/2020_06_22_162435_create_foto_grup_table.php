<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoGrupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_grup', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('foto_id')->unsigned();
            $table->integer('grup_id')->unsigned();
            $table->foreign('foto_id')->references('id')->on('foto')
            ->onDelete('cascade');
            $table->foreign('grup_id')->references('id')->on('grup')
            ->onDelete('cascade');
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
        Schema::dropIfExists('foto_grup');
    }
}