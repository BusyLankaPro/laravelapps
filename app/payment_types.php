<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_types extends Model
{
    protected $primaryKey = 'PaymentTypeID';

    // relationship with purchase_payments
    public function purchase_payments()
    {
      return  $this->hasMany(purchase_payments::class, 'PurchasePayment_PaymentType_FK');
    }

    // relationship with  sales
    public function sales()
    {
      return $this->hasMany(sales::class, 'Sales_SalesPaymentType_FK');
    }

}
