<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    protected $primaryKey = 'ItemsID';

    // relationship with item_sub_groups
    public function item_sub_groups()
    {
      return $this->belongsTo(item_sub_groups::class, 'Items_ItemsSubGroup_Fk');
    }

    // relationship with items_distribute_lists
    public function items_distribute_lists()
    {
      return $this->hasMany(items_distribute_lists::class, 'ItemsDistributeList_Items_FK' );
    }

    // relationship with branch_stores
    public function branch_stores()
    {
      return $this->hasMany(branch_stores::class, 'BranchStore_Items_FK');
    }

    // relationship with item_sales_price_lists
    public function item_sales_price_lists()
    {
      return $this->hasMany(item_sales_price_lists::class, 'ItemSalesPriceList_Items_FK');
    }

    // relationship with items_beginning_inventories
    public function items_beginning_inventories()
    {
      return $this->hasMany(items_beginning_inventories::class, 'IBI_Items_FK');
    }

    // relationship with purchase_item_lists
    public function purchase_item_lists()
    {
      return $this->hasMany(purchase_item_lists::class, 'PurchaseItemList_Items_FK');
    }

    // relationship with vendors_items
    public function vendors_items()
    {
      return $this->hasMany(vendors_items::class, 'VendorsItems_Items_FK');
    }

}
