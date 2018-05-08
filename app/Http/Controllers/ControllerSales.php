<?php

namespace App\Http\Controllers;

use App\sales;
use Illuminate\Http\Request;

class ControllerSales extends Controller
{

    public function AddSales(Request $request)
    {
    	//echo "string";
    	return view('Sales');
    	
    }
   

}
