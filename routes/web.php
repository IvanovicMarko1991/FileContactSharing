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

Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'index'
]);


Route::get('/contacts', [
    'uses' => 'PagesController@contacts',
    'as' => 'contacts'
]);

Route::get('/files', [
    'uses' => 'PagesController@files',
    'as' => 'files'
]);

Route::get('/contacts','ContactsController@index');


Route::post('contacts/contacts',[
    'uses' => 'ContactsController@create',
      'as'=>'store'  ]);

Route::put('contacts/contacts{id}',[
    'uses'=> 'ContactsController@update',
    'as'=>'update' ]);

Route::delete('contacts/contacts{id}', [
    'uses' => 'ContactsController@destroy',
    'as' =>'destroy' ]);

    Route::get('/files', 'FilesController@index');

   

    Route::post('files/files',[
        'uses'=> 'FilesController@store',
        'as' => 'store' 
        ]);

    Route::put('contacts/contacts{id}',[
        'uses'=>'ContactsController@update',
        'as'=> 'update'
    ]);

    Route::delete('files/files{id}',[
        'uses' => 'FilesController@destroy',
        'as' => 'destroy'
    ]);

