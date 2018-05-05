<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
              $table->bigIncrements('SalesID');
              $table->bigInteger('SalesAmount');
              $table->bigInteger('Sales_SalesPaymentType_FK')->unsigned();
              $table->foreign('Sales_SalesPaymentType_FK')->references('PaymentTypeID')->on('payment_types');
              $table->bigInteger('Sales_Branch_FK')->unsigned();
              $table->foreign('Sales_Branch_FK')->references('BranchID')->on('branches');
              $table->dateTime('SalesDate');
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
        Schema::dropIfExists('sales');
    }
}
