<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_payments extends Model
{
    protected $primaryKey = 'PurchasePaymentID';

    // relationship with purchases
    public function purchases()
    {
      return $this->belongsTo(purchases::class, 'PurchasePayment_Purchase_FK');
    }

    // relationship with payment_types
    public function payment_types()
    {
      return $this->belongsTo(payment_types::class, 'PurchasePayment_PaymentType_FK');
    }

}
