<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendors_items extends Model
{
    protected $primaryKey = '';

    // relationship with vendors
    public function vendors()
    {
      return $this->belongsTo(vendors::class, 'VendorsItems_Vendors_FK');
    }

    // relationship with items
    public function items()
    {
      return $this->belongsTo(items::class, 'VendorsItems_Items_FK');
    }

}
