<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class system_users extends Model
{
  protected $primaryKey = 'SystemUserID';

  // relationship with staffs
  public function staffs()
  {
    return $this->belongsTo(staffs::class , 'SystemUser_Staff_FK');
  }
}
