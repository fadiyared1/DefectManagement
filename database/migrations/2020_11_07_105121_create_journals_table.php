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

            $table->Integer('idDefect');
            $table->foreign(idDefect)->references('id')->on('defect');

            $table->Integer('idExpert');
            $table->foreign(idExpert)->references('id')->on('user');

            $table->Integer('idStatus');
            $table->foreign(idStatus)->references('id')->on('status');

            $table->timestamps('lastUpdate');

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
        Schema::dropIfExists('journals');
    }
}
