<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributes', function (Blueprint $table) {
              $table->bigIncrements('DistributeID');
              $table->string('DistributeDesc' , 300 );
              $table->bigInteger('Distribute_Branch_FK')->unsigned();
              $table->foreign('Distribute_Branch_FK')->references('BranchID')->on('branches');
              $table->bigInteger('Distribute_DistributeList_FK')->unsigned();
              $table->foreign('Distribute_DistributeList_FK')->references('DistributeListID')->on('items_distribute_lists');
              $table->timestamp('DistributeDate');
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
        Schema::dropIfExists('distributes');
    }
}
