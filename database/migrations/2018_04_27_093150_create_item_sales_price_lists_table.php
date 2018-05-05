<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSalesPriceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sales_price_lists', function (Blueprint $table) {
              $table->bigIncrements('ItemSalesPriceListID');
              $table->bigInteger('ItemSalesPriceListPrice');
              $table->bigInteger('ItemSalesPriceList_Items_FK')->unsigned();
              $table->foreign('ItemSalesPriceList_Items_FK')->references('ItemsID')->on('items');
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
        Schema::dropIfExists('item_sales_price_lists');
    }
}
