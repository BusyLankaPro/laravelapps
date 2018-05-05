<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items_distribute_lists extends Model
{
    protected $primaryKey = 'DistributeListID';

    // relationship with items
    public function items()
    {
      return $this->belongsTo(items::class , 'ItemsDistributeList_Items_FK');
    }

    // relationship with distributes
    public function distributes()
    {
      return $this->hasMany(distributes::class , 'Distribute_DistributeList_FK');
    }

}
