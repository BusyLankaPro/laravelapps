<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item_main_groups extends Model
{

    protected $primaryKey ='ItemMainGroupID';

    public function item_sub_groups()
    {
      return $this->hasMany(item_sub_groups::class , 'ItemSubGroup_ItemMainGroup_FK');
    }
}
