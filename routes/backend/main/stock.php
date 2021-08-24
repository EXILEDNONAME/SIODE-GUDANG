<?php

// STOCKS
Route::group([
  'as' => 'main.stocks.',
  'prefix' => 'dashboard/stocks',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'StockController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'StockController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'StockController@enable')->name('enable');
  Route::get('disable/{id}', 'StockController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'StockController@status')->name('status');
  Route::get('delete/{id}', 'StockController@delete')->name('delete');
  Route::get('deleteall', 'StockController@deleteall')->name('deleteall');
  Route::resource('/', 'StockController')->parameters(['' => 'id']);
});
