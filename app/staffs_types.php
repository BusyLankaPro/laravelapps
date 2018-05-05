<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staffs_types extends Model
{
    protected $primaryKey = 'StaffsTypeID';

    // relationship with staffs
    public function staffs()
    {
      return  $this->hasMany(staffs::class , 'Staffs_StaffsType_Fk');
    }

}
