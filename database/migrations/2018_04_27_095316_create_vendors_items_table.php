<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors_items', function (Blueprint $table) {
              $table->bigIncrements('VendorsItemsID');
              $table->bigInteger('VendorsItems_Items_FK')->unsigned();
              $table->foreign('VendorsItems_Items_FK')->references('ItemsID')->on('items');
              $table->bigInteger('VendorsItems_Vendors_FK')->unsigned();
              $table->foreign('VendorsItems_Vendors_FK')->references('VendorsID')->on('vendors');
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
        Schema::dropIfExists('vendors_items');
    }
}
