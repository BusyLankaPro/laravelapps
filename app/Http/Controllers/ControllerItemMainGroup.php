<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_main_groups;
use Illuminate\Support\Facades\Input;

class ControllerItemMainGroup extends Controller
{
  public function submit(Request $request)
  {
    switch ($request -> input('Submit')) {

          // ------------------------------------------------------------------------------------------
            case 'Save':

                $this->validate( $request, [
                    'name' => 'required'
                ]);

                // create objecet for item_main_groups class

                $item_main_groupsObj = new item_main_groups;
                $item_main_groupsObj -> ItemMainGroupName = $request -> input('name');

                $item_main_groupsObj -> save();

                return redirect('ItemsMainGroup')->with('SuccessMessage' , "Inserted Successfully..");
              break;

          // ------------------------------------------------------------------------------------------

            case 'Update':

                $this->validate( $request, [
                    'name' => 'required',
                    'IDBox' => 'required'
                ]);

                // create objecet for item_main_groups class
                $id = $request -> input('IDBox');
                $item_main_groupsObj = item_main_groups::find($id);
                $item_main_groupsObj -> ItemMainGroupName = $request -> input('name');

                $item_main_groupsObj -> update();

                return redirect('ItemsMainGroup')->with('SuccessMessage' , "Updated Successfully..");
              break;

            // ------------------------------------------------------------------------------------------
              case 'Delete':

                  $this->validate( $request, [
                      'IDBox' => 'required'
                  ]);

                  // create objecet for item_main_groups class
                  $id = $request -> input('IDBox');
                  $item_main_groupsObj = item_main_groups::find($id);

                  $item_main_groupsObj -> delete();

                  return redirect('ItemsMainGroup')->with('SuccessMessage' , "Deleted Successfully..");
                break;


    }


  }
  public function ViewList()
  {
    $item_main_groupsObj = item_main_groups::all();
    return view('ItemMainGroup')->with( 'myList' , $item_main_groupsObj );
  }
  public function ViewListJSON()
  {
    return response()->json(item_main_groups::all());
  }



}
