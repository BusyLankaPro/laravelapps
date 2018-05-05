<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributes extends Model
{
    protected $primaryKey ='';

    // relationship with items_distribute_lists
    public function items_distribute_lists()
    {
      return $this->belongsTo(items_distribute_lists::class , 'Distribute_DistributeList_FK');
    }

    // relationship with Branches
    public function Branches()
    {
      return $this->belongsTo(Branches::class, 'BranchStore_Branches_FK');
    }

}
