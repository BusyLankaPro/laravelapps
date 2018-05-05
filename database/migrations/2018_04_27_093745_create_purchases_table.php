<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
              $table->bigIncrements('PurchaseID');
              $table->timestamp('PurchaseDate');
              $table->string('PurchaseDesc' , 300 );
              $table->bigInteger('Amound');
              $table->bigInteger('Purchase_V_FK')->unsigned();
              $table->foreign('Purchase_V_FK')->references('VendorsID')->on('vendors');
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
        Schema::dropIfExists('purchases');
    }
}
