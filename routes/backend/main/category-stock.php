<?php

// CATEGORY STOCKS
Route::group([
  'as' => 'main.category-stocks.',
  'prefix' => 'dashboard/category-stocks',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'CategoryStockController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'CategoryStockController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'CategoryStockController@enable')->name('enable');
  Route::get('disable/{id}', 'CategoryStockController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'CategoryStockController@status')->name('status');
  Route::get('delete/{id}', 'CategoryStockController@delete')->name('delete');
  Route::get('deleteall', 'CategoryStockController@deleteall')->name('deleteall');
  Route::resource('/', 'CategoryStockController')->parameters(['' => 'id']);
});
