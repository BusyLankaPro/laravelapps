<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{
    protected $primaryKey = 'PurchaseID';

    // relationship with vendors
    public function vendors()
    {
      return $this->belongsTo(vendors::class, 'Purchase_V_FK');
    }

    // relationship with purchase_payments
    public function purchase_payments()
    {
      return $this->hasMany(purchase_payments::class, 'PurchasePayment_Purchase_FK');
    }

    // relationship with  purchase_item_lists
    public function purchase_item_lists()
    {
      return $this->hasMany(purchase_item_lists::class, 'PurchaseItemList_Purchase_FK');
    }

    // relationship with purchase_returns
    public function purchase_returns()
    {
      return $this->hasMany(purchase_returns::class, 'PurchaseReturn_Purchase_FK');
    }

}
