<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
  protected $primaryKey='SalesID';

    public function Branches()
    {
      return $this->belongsTo(Branches::class , 'Sales_Branch_FK')
    }

    // relationship with sales_returns
    public function sales_returns()
    {
      return $this->hasMany(sales_returns::class, 'Sales_FK');
    }

    // relationship with payment_types
    public function payment_types()
    {
      return $this->belongsTo(payment_types::class , 'Sales_SalesPaymentType_FK');
    }

}
