<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPurchasePayment extends Controller
{
  public function AddPurchasePayment(Request $request)
  {
      return view('purchase_payment');

  }
}
