<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment_types;

class ControllerPaymentType extends Controller
{
    public function Submit(Request $request)
    {

      $this->validate( $request , [
        'name' => 'required',
      ]);

      $payment_typesObj = new payment_types;
      $payment_typesObj -> PaymentTypeName = $request -> input('name');
      $payment_typesObj->save();

      return redirect('PaymentType')->with('SuccessMessage', "Inserted Successfully..");

    }

    public function getList()
    {
      $payment_typesObj = payment_types::all();
      return view('PaymentType')->with( 'myList' , $payment_typesObj );
    }


    public function getDeleteByID(Request $request)
    {
      $this->validate($request, [
        'selectedIDText' => 'required'
      ]);
      $id = $request->input('selectedIDText');
      $payment_typesObj = payment_types::find($id)->delete();
      return redirect('PaymentType')->with( 'SuccessMessage' , 'Deleted Successfully..' );
    }

}
