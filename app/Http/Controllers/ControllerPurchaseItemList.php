<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPurchaseItemList extends Controller
{
    public function AddPurchaseItem(Request $request)
    {
       // echo "test";
        return view('purchase_item_list');
    }
}
