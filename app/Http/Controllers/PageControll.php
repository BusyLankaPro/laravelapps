<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControll extends Controller
{
    public function getLogin()
    {
      return view('login');
    }
    public function getHome()
    {
      return view('main');
    }
    public function getSale()
    {
      return view('sales');
    }
    public function getHR()
    {
      return view('HR');
    }
    public function getItems()
    {
      return view('Items');
    }
    public function getPurchase()
    {
      return view('Purchase');
    }
    public function getPurchase_Return()
    {
      return view('Purchase_Return');
    }
    public function getBranches()
    {
      return view('branches');
    }
}
