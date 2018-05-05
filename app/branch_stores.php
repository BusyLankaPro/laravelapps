<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch_stores extends Model
{
    protected $primaryKey = 'BranchStoreID';

    // relationship with Branches
    public function Branches()
    {
      return $this->belongsTo(Branches::class, 'BranchStore_Branches_FK');
    }

    // relationship with  items
    public function items()
    {
      return $this->belongsTo(items::class, 'BranchStore_Items_FK');
    }

}
