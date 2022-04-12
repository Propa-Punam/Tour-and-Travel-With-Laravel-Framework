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

Route::get('/', 'newController@index' );
Route::get('/pack_insert', 'enqController@pack_insert' );
Route::get('/enquiry', 'enqController@index' );
Route::post('/inset_enq','enqController@inset_enq');
Route::get('/packUser','adminController@packUser');
Route::post('/enq_insert','enqController@enq_insert');
Route::post('/insert_pack','enqController@insert_pack');
Route::get('/admin', 'admin@index' );
Route::get('/faq', 'newController@faq' );

Route::get('/delete', 'adminController@delete' );
Route::post('/insert','RegInsertController@insert');
Route::post('/viewUsername','adminController@viewusername');
Route::get('/loginForm','loginController@index');
Route::get('/view','adminController@view');
Route::post('/viewTable','adminController@viewTable');
Route::post('/viewPackage','adminController@viewPackage');
Route::post('/login','loginController@check');
Route::get('/update','adminController@update');
Route::post('/addCol','adminController@addCol');
Route::get('/confirm','adminController@confirm');
Route::post('/confirm_method','adminController@confirm_method');
Route::post('/orderPack','adminController@orderPack');
Route::post('/removeCol','adminController@removeCol');
Route::post('/ChangeCol','adminController@ChangeCol');
Route::post('/renameCol','adminController@renameCol');
Route::post('/updateId','adminController@updateId');
Route::post('/deleteTable','adminController@deleteTable');
Route::post('/deleteid','adminController@deleteid');
