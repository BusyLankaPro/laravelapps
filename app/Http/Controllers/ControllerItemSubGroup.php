<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_sub_groups;
use Illuminate\Support\Facades\Input;

class ControllerItemSubGroup extends Controller
{

    public function submit(Request $request)
    {
      switch ($request -> input('Submit')) {

            // ------------------------------------------------------------------------------------------
              case 'Save':

                  $this->validate( $request, [
                      'name' => 'required',
                      'itemMainGroupID' => 'required'
                  ]);

                  // create objecet for item_main_groups class

                  $item_sub_groupsObj = new item_sub_groups;
                  $item_sub_groupsObj -> ItemSubGroupName = $request -> input('name');
                  $item_sub_groupsObj -> ItemSubGroup_ItemMainGroup_FK = $request -> input('itemMainGroupID');

                  $item_sub_groupsObj -> save();

                  return redirect('ItemsSubGroup')->with('SuccessMessage' , "Inserted Successfully..");
                break;

            // ------------------------------------------------------------------------------------------

              case 'Update':

                  $this->validate( $request, [
                      'name' => 'required',
                      'IDBox' => 'required',
                      'itemMainGroupID' => 'required'
                  ]);

                  // create objecet for item_main_groups class
                  $id = $request -> input('IDBox');
                  $item_sub_groupsObj = item_sub_groups::find($id);
                  $item_sub_groupsObj -> ItemSubGroupName = $request -> input('name');
                  $item_sub_groupsObj -> ItemSubGroup_ItemMainGroup_FK = $request -> input('itemMainGroupID');

                  $item_sub_groupsObj -> update();

                  return redirect('ItemsSubGroup')->with('SuccessMessage' , "Updated Successfully..");
                break;

              // ------------------------------------------------------------------------------------------
                case 'Delete':

                    $this->validate( $request, [
                        'IDBox' => 'required'
                    ]);

                    // create objecet for item_main_groups class
                    $id = $request -> input('IDBox');
                    $item_sub_groupsObj = item_sub_groups::find($id);

                    $item_sub_groupsObj -> delete();

                    return redirect('ItemsSubGroup')->with('SuccessMessage' , "Deleted Successfully..");
                  break;
      }


    }
    public function ViewList()
    {
      $item_main_groupsObj = item_sub_groups::all();
      return view('ItemSubGroup')->with( 'myList' , $item_main_groupsObj );
    }

    public function ItemsSubGroupJSONGet()
    {
      $id = $_POST['id'];
      return response()->json(item_sub_groups::find($id));
    }
    public function ViewListJSON()
    {
      return response()->json(item_sub_groups::all());
    }
}
