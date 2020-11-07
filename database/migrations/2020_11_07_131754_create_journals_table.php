<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal', function (Blueprint $table) {
            

            $table->increments('id');

            $table->unsignedBigInteger('idDefect');
            $table->foreign('idDefect')->references('id')->on('defect')->onDelete('cascade');

            $table->unsignedBigInteger('idExpert');
            $table->foreign('idExpert')->references('id')->on('user')->onDelete('cascade');

            $table->unsignedBigInteger('idStatus');
            $table->foreign('idStatus')->references('id')->on('status')->onDelete('cascade');

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
        Schema::dropIfExists('journal');
    }
}
