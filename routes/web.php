<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageControll@getLogin' );
Route::get('/Home', 'PageControll@getHome' );
Route::get('/Branches', 'ControllerBranches@ViewList' );
Route::post('/Branches/submit', 'ControllerBranches@Submit' );


//Purchase
Route::get('/Purchase', function () {
    return view('Purchase');
});

//purchase routes
Route::get('/Purchase-Payment','ControllerPurchasePayment@AddPurchasePayment');
Route::get('/Purches-return', 'ControllerPurchaseReturn@AddPurchaseReturn');
Route::get('/Purchase-Item','ControllerPurchaseItemList@AddPurchaseItem');

