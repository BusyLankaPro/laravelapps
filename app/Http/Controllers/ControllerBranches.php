<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branches;

class ControllerBranches extends Controller
{

    // submit branch infor
    public function Submit( Request $request )
    {

      switch ($request -> submitbutton) {
        case 'save':
            $this->validate( $request, [
              'name' => 'required',
              'telephone' => 'required|numeric',
              'email' => 'required|email',
              'address' => 'required',
            ]);

            $BranchesObj = new Branches;
            $BranchesObj -> BranchName = $request -> input('name');
            $BranchesObj -> BranchTellNo = $request -> input('telephone');
            $BranchesObj -> BranchAddress = $request -> input('email');
            $BranchesObj -> BranchEmail = $request -> input('address');

            $BranchesObj -> save();
          break;

        default:
          // code...
          break;
      }



      return redirect('Branches')->with('SuccessMessage' , "Inserted Successfully..");
    }

    // how lisbtn
    public function ViewList()
    {
      $branchListRet = Branches::all();
       return view('Branches')->with( 'myList' , $branchListRet );
    }

    public function FindByID()
    {
      $branchListRet = Branches::all();
       return view('Branches_Search')->with( 'myList' , $branchListRet );
    }

    public function ViewListJSON()
    {
      return response()->json(Branches::all());
    }

    public function ViewListJSONByID()
    {
      $id = $_POST['id'];
      return response()->json(Branches::find($id));
    }

    public function deleteJSONById()
    {
      $id = $_POST['id'];
      Branches::find($id)->delete();
      return response()->json( [ 'message' =>$id.' is deleted successfully' ] );
    }


}
