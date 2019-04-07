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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-contact','AboutController@AllContacts')->name('all.contacts');
Route::get('/insert-data','AboutController@InsertData');
Route::post('/data-added','AboutController@DataAdded');
Route::get('/delete-data/{id}','AboutController@DeleteData');
Route::get('/edit-data/{id}','AboutController@EditData');
Route::post('/update-data/{id}','AboutController@UpdateData');
Route::get('/view-data/{id}','AboutController@ViewData');