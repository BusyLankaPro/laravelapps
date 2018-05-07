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
//sales routes
Route::get('/Sales', 'ControllerSales@AddSales' );
Route::get('/Sales-list','ControllerSalesList@ViewList');
Route::get('/Sales-return','ControllerSalesReturn@ViewSalesReturn');
=======

// Items main nav touring

Route::post('/ItemsMainGroup/submit', 'ControllerItemMainGroup@submit' );
Route::get('/ItemsMainGroup', 'ControllerItemMainGroup@ViewList' );
>>>>>>> 9a7260f14a7bd8e7c7d9ea57bb20d06d98be72d3
