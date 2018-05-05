<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items_beginning_inventories extends Model
{
    protected $primaryKey = 'ItemsBeginningInventoryID';

    // relationship with items
    public function items()
    {
      return $this->belongsTo(items::class, 'IBI_Items_FK');
    }
}
