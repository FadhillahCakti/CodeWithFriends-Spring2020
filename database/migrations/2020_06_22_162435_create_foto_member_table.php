<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_member', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('foto_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->foreign('foto_id')->references('id')->on('foto')
            ->onDelete('cascade');
            $table->foreign('member_id')->references('id')->on('member')
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
        Schema::dropIfExists('foto_member');
    }
}