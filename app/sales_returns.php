<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales_returns extends Model
{
  // changed primary keyval
  protected $primaryKey = 'SalesReturnID';

    // relationship with sales
    public function sales()
    {
      return $this->belongsTo(sales::class , 'Sales_FK');
    }
}
