<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_users', function (Blueprint $table) {
              $table->bigIncrements('SystemUserID');
              $table->string('SystemUser_Username' , 50 );
              $table->string('SystemUser_Password' , 50 );
              $table->bigInteger('SystemUser_Staff_FK')->unsigned();
              $table->foreign('SystemUser_Staff_FK')->references('StaffsID')->on('staffs');
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
        Schema::dropIfExists('system_users');
    }
}
