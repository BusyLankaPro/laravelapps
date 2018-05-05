<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_item_lists extends Model
{
    protected $primaryKey = 'PurchaseItemListID';

    // relationship with purchases
    public function purchases()
    {
      return $this->belongsTo(purchases::class, 'PurchaseItemList_Purchase_FK');
    }

    // relationship with items
    public function items()
    {
      return $this->belongsTo(items::class, 'PurchaseItemList_Items_FK');
    }

}
