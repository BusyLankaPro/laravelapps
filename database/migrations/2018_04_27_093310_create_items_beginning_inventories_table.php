<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsBeginningInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_beginning_inventories', function (Blueprint $table) {
              $table->bigIncrements('ItemsBeginningInventoryID');
              $table->bigInteger('Quantity');
              $table->bigInteger('IBI_Items_FK')->unsigned();
              $table->foreign('IBI_Items_FK')->references('ItemsID')->on('items');
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
        Schema::dropIfExists('items_beginning_inventories');
    }
}
