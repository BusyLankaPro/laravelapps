<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_main_groups;

class ControllerItemMainGroup extends Controller
{
    public function getList()
    {
      $item_main_groupsObj = item_main_groups::all();
      return view('ItemMainGroup')->with( 'myList' , $item_main_groupsObj );
    }
}
