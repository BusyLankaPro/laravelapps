<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_returns', function (Blueprint $table) {
              $table->bigIncrements('PurchaseReturnID');
              $table->string('PurchaseReturnNote' , 150 );
              $table->bigInteger('PurchaseReturnQuantity');
              $table->bigInteger('PurchaseReturn_Purchase_FK')->unsigned();
              $table->foreign('PurchaseReturn_Purchase_FK')->references('PurchaseID')->on('purchases');
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
        Schema::dropIfExists('purchase_returns');
    }
}
