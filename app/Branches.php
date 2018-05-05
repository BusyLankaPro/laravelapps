<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    protected $primaryKey = 'BranchID';

    public function sales()
    {
      return $this->hasMany(sales::class, 'Sales_Branch_FK');
    }

    // relationship with staffs
    public function staffs()
    {
      return $this->hasMany(staffs::class, 'Staffs_Branch_fk');
    }

    // relationship with branch_stores
    public function branch_stores()
    {
      return $this->hasMany(branch_stores::class , 'BranchStore_Branches_FK');
    }

    // relationship with distributes
    public function distributes()
    {
      return $this->hasMany(distributes::class, 'Distribute_Branch_FK');
    }



}
