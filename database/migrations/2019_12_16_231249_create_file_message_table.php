<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_message', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('file_id')->unsigned();
            $table->bigInteger('message_id')->unsigned();
            $table->timestamps();
            $table->foreign('file_id')->references('id')->on('files');
            $table->foreign('message_id')->references('id')->on('messages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_message');
    }
}
