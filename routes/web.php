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

<<<<<<< HEAD

//Purchase
Route::get('/Purchase', function () {
    return view('Purchase');
});

//purchase routes
Route::get('/Purchase-Payment','ControllerPurchasePayment@AddPurchasePayment');
Route::get('/Purches-return', 'ControllerPurchaseReturn@AddPurchaseReturn');
Route::get('/Purchase-Item','ControllerPurchaseItemList@AddPurchaseItem');

=======
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
<<<<<<< HEAD
=======
// >>>>>>> 9a7260f14a7bd8e7c7d9ea57bb20d06d98be72d3
>>>>>>> 6006e7fa8ee42cb0ef10cc8f04606b0eed730009
>>>>>>> 9f0c429f992a1bcf3e72f1fcda507f60e40daf83
