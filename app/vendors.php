<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendors extends Model
{
    protected $primaryKey = 'VendorsID';

    // relationship with purchases
    public function purchases()
    {
      return $this->hasMany(purchases::class, 'Purchase_V_FK');
    }

    // relationship with vendors_items
    public function vendors_items()
    {
      return $this->hasMany(vendors_items::class, 'VendorsItems_Vendors_FK');
    }

}
