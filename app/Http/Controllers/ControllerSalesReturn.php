<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSalesReturn extends Controller
{
    public function ViewSalesReturn(Request $request)
    {
    	//echo "test";
    	return view('sales_return');
    }	
}
