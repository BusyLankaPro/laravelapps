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

//sales routes
Route::get('/Sales', 'ControllerSales@AddSales' );
Route::get('/Sales-list','ControllerSalesList@ViewList');
Route::get('/Sales-return','ControllerSalesReturn@ViewSalesReturn');


// Items main nav touring

Route::post('/ItemsMainGroup/submit', 'ControllerItemMainGroup@submit' );
Route::get('/ItemsMainGroup', 'ControllerItemMainGroup@ViewList' );
Route::post('/ItemsMainGroupJSON', 'ControllerItemMainGroup@ViewListJSON' );

Route::get('/ItemsSubGroup', 'ControllerItemSubGroup@ViewList' );
Route::post('/ItemsSubGroup/submit', 'ControllerItemSubGroup@submit' );
Route::post('/ItemsSubGroupJSONGet', 'ControllerItemSubGroup@ItemsSubGroupJSONGet' );
Route::post('/ItemsSubGroupJSON', 'ControllerItemSubGroup@ViewListJSON' );

Route::get('/Items', 'ControllerItems@ViewList' );
Route::post('/Items/submit', 'ControllerItems@submit' );
Route::post('/ItemsJSONGet', 'ControllerItems@ControllerItemsJSONGet' );

// >>>>>>> 9a7260f14a7bd8e7c7d9ea57bb20d06d98be72d3
