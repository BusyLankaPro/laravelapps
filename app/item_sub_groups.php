<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item_sub_groups extends Model
{

    protected $primaryKey ='ItemSubGroupID';

    public function item_main_groups($value='')
    {
      return $this->belongsTo(item_main_groups::class , 'ItemSubGroup_ItemMainGroup_FK');
    }

    // relationship with items
    public function items()
    {
      return $this->hasMany(items::class, 'Items_ItemsSubGroup_Fk');
    }

}
