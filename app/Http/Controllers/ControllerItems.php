<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ControllerItems extends Controller
{


      public function submit(Request $request)
      {
        switch ($request -> input('Submit')) {

              // ------------------------------------------------------------------------------------------
                case 'Save':

                    $this->validate( $request, [
                        'sortName' => 'required',
                        'longName' => 'required',
                        'minQuantity' => 'required|integer',
                        'maxQuantity' => 'required|integer',
                        'barcode' => 'required',
                        'subGroupFK' => 'required'
                    ]);

                    // create objecet for item_main_groups class

                    $itemsObj = new items;
                    $itemsObj -> ItemsShortName = $request -> input('sortName');
                    $itemsObj -> ItemsLongName = $request -> input('longName');
                    $itemsObj -> ItemsMinQue = $request -> input('minQuantity');
                    $itemsObj -> ItemsMaxQue = $request -> input('maxQuantity');
                    $itemsObj -> ItemsBarCode = $request -> input('barcode');
                    $itemsObj -> Items_ItemsSubGroup_Fk = $request -> input('subGroupFK');

                    $itemsObj -> save();

                    return redirect('Items')->with('SuccessMessage' , "Inserted Successfully..");
                  break;

              // ------------------------------------------------------------------------------------------

                case 'Update':

                    $this->validate( $request, [
                        'sortName' => 'required',
                        'longName' => 'required',
                        'minQuantity' => 'required|integer',
                        'maxQuantity' => 'required|integer',
                        'barcode' => 'required',
                        'subGroupFK' => 'required'
                    ]);

                    // create objecet for item_main_groups class
                    $id = $request -> input('IDBox');
                    $itemsObj = items::find($id);
                    $itemsObj -> ItemsShortName = $request -> input('sortName');
                    $itemsObj -> ItemsLongName = $request -> input('longName');
                    $itemsObj -> ItemsMinQue = $request -> input('minQuantity');
                    $itemsObj -> ItemsMaxQue = $request -> input('maxQuantity');
                    $itemsObj -> ItemsBarCode = $request -> input('barcode');
                    $itemsObj -> Items_ItemsSubGroup_Fk = $request -> input('subGroupFK');

                    $itemsObj -> update();

                    return redirect('Items')->with('SuccessMessage' , "Updated Successfully..");
                  break;

                // ------------------------------------------------------------------------------------------
                  case 'Delete':

                      $this->validate( $request, [
                          'IDBox' => 'required'
                      ]);

                      // create objecet for item_main_groups class
                      $id = $request -> input('IDBox');
                      $itemsObj = items::find($id);

                      $itemsObj -> delete();

                      return redirect('Items')->with('SuccessMessage' , "Deleted Successfully..");
                    break;
        }


      }
      public function ViewList()
      {
        $item_main_groupsObj = items::all();
        return view('Items')->with( 'myList' , $item_main_groupsObj );
      }

      public function ControllerItemsJSONGet()
      {
        $id = $_POST['id'];
        return response()->json(items::find($id));
      }
}
