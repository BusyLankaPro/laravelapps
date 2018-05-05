<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staffs extends Model
{
    // relationship with staffs_types
    public function staffs_types()
    {
      return $this->belongsTo(staffs_types::class, 'Staffs_StaffsType_Fk');
    }

    // relationship with Branches
    public function Branches()
    {
      return $this->belongsTo(Branches::class, 'Staffs_Branch_fk');
    }
    
    // relationship with system_users
    public function system_users()
    {
      return $this->hasMany(system_users::class, 'SystemUser_Staff_FK');
    }
}
