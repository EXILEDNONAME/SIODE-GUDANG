<?php

// STOCKS
Route::group([
  'as' => 'main.stocks.',
  'prefix' => 'dashboard/stocks',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('/', 'StockController@index')->name('index');
});
