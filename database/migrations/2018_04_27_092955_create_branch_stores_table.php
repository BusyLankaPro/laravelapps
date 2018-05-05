<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_stores', function (Blueprint $table) {
              $table->bigIncrements('BranchStoreID');
              $table->string('BranchStoreName' , 100 );
              $table->bigInteger('ItemsQuantity');
              $table->bigInteger('QuantityMax');
              $table->bigInteger('QuantityMin');
              $table->bigInteger('BranchStore_Items_FK')->unsigned();
              $table->foreign('BranchStore_Items_FK')->references('ItemsID')->on('items');
              $table->bigInteger('BranchStore_Branches_FK')->unsigned();
              $table->foreign('BranchStore_Branches_FK')->references('BranchID')->on('branches');
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
        Schema::dropIfExists('branch_stores');
    }
}
