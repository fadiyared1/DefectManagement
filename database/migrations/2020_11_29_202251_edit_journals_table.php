<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('journal', function (Blueprint $table) {
        
            $table->dropForeign(['idExpert']);
            $table->dropColumn('idExpert');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {    Schema::table('journal', function (Blueprint $table) {
        $table->unsignedBigInteger('idExpert');
        $table->foreign('idExpert')->references('id')->on('users');
    });
    }
}
