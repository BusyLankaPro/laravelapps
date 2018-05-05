<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseItemListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_item_lists', function (Blueprint $table) {
              $table->bigIncrements('PurchaseItemListID');
              $table->bigInteger('PurchaseItemList_Items_FK')->unsigned();
              $table->foreign('PurchaseItemList_Items_FK')->references('ItemsID')->on('items');
              $table->bigInteger('PurchaseItemList_Purchase_FK')->unsigned();
              $table->foreign('PurchaseItemList_Purchase_FK')->references('PurchaseID')->on('purchases');
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
        Schema::dropIfExists('purchase_item_lists');
    }
}
