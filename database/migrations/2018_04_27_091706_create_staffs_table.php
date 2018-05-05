<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
              $table->bigIncrements('StaffsID');
              $table->string('StaffsName' , 100 );
              $table->integer('StaffsMobNo');
              $table->string('StaffsAddress' , 200 );
              $table->string('StaffsEmail' , 100 );
              $table->bigInteger('Staffs_Branch_fk')->unsigned();
              $table->foreign('Staffs_Branch_fk')->references('BranchID')->on('branches');
              $table->bigInteger('Staffs_StaffsType_Fk')->unsigned();
              $table->foreign('Staffs_StaffsType_Fk')->references('StaffsTypeID')->on('staffs_types');
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
        Schema::dropIfExists('staffs');
    }
}
