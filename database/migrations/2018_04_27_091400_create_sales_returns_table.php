<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_returns', function (Blueprint $table) {
            $table->bigIncrements('SalesReturnID');
            $table->string('SalesReturnNote' , 300 );
            $table->bigInteger('SalesReturnQuantiry');
            $table->bigInteger('Sales_FK')->unsigned();
            $table->foreign('Sales_FK')->references('SalesID')->on('sales');
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
        Schema::dropIfExists('sales_returns');
    }
}
