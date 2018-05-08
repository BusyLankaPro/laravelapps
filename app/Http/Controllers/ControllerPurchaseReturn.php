<?php

namespace App\Http\Controllers;
use App\purchase_returns;
use Illuminate\Http\Request;

class ControllerPurchaseReturn extends Controller
{
    public function AddPurchaseReturn()
    {

       return view ('purchase_return');
    }
}
