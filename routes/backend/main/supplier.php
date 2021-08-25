<?php

// SUPPLIERS
Route::group([
  'as' => 'main.suppliers.',
  'prefix' => 'dashboard/suppliers',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'SupplierController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'SupplierController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'SupplierController@enable')->name('enable');
  Route::get('disable/{id}', 'SupplierController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'SupplierController@status')->name('status');
  Route::get('delete/{id}', 'SupplierController@delete')->name('delete');
  Route::get('deleteall', 'SupplierController@deleteall')->name('deleteall');
  Route::resource('/', 'SupplierController')->parameters(['' => 'id']);
});
