<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grup_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grup_id')->unsigned();
            $table->integer('info_id')->unsigned();
            $table->foreign('grup_id')->references('id')->on('grup')
            ->onDelete('cascade');
            $table->foreign('info_id')->references('id')->on('info')
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
        Schema::dropIfExists('grup_info');
    }
}