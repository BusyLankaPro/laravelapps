<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsDistributeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_distribute_lists', function (Blueprint $table) {
              $table->bigIncrements('DistributeListID');
              $table->bigInteger('ItemsDistributeList_Items_FK')->unsigned();
              $table->foreign('ItemsDistributeList_Items_FK')->references('ItemsID')->on('items');
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
        Schema::dropIfExists('items_distribute_lists');
    }
}
