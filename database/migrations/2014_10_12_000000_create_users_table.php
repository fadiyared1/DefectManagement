<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phonenb');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('idRole');
           // $table->foreign('idRole')->references('id')->on('role');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('user')->insert(
            array(
                'firstname'=>'michel',
                'lastname'=>'lebbos',
                'phonenb'=>'76010434',
                'email' => 'lebbosmicho@hotmail.com',
                'password' => '123',
                'idRole'=>'1'    
            
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
