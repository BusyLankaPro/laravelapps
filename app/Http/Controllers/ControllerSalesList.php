<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControllerSalesList extends Controller
{
     public function ViewList(Request $request)
    {
    	//echo "string";
    	return view('sales_list');
    	
    }
   
}
