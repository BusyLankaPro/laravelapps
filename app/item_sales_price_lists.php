<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item_sales_price_lists extends Model
{
  protected $primaryKey= 'ItemSalesPriceListID';

  // relationship with items
  public function items()
  {
    return $this->belongsTo(items::class, 'ItemSalesPriceList_Items_FK');
  }

}
