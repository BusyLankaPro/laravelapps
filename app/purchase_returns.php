<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_returns extends Model
{
    protected $primaryKey = 'PurchaseReturnID';

    // relationship with purchases
    public function purchases()
    {
      return $this->belongsTo(purchases::class, 'PurchaseReturn_Purchase_FK');
    }
}
