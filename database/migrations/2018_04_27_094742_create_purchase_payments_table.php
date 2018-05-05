<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_payments', function (Blueprint $table) {
              $table->bigIncrements('PurchasePaymentID');
              $table->string('PurchasePaymentDesc' , 300 );
              $table->bigInteger('PaidAmount');
              $table->bigInteger('PurchasePayment_Purchase_FK')->unsigned();
              $table->foreign('PurchasePayment_Purchase_FK')->references('PurchaseID')->on('purchases');
              $table->bigInteger('PurchasePayment_PaymentType_FK')->unsigned();
              $table->foreign('PurchasePayment_PaymentType_FK')->references('PaymentTypeID')->on('payment_types');
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
        Schema::dropIfExists('purchase_payments');
    }
}
