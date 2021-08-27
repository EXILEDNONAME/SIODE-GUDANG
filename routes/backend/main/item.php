<?php

// ITEM - CATEGORIES
Route::group([
  'as' => 'main.item.categories.',
  'prefix' => 'dashboard/item-categories',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'ItemCategoryController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ItemCategoryController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ItemCategoryController@enable')->name('enable');
  Route::get('disable/{id}', 'ItemCategoryController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ItemCategoryController@status')->name('status');
  Route::get('delete/{id}', 'ItemCategoryController@delete')->name('delete');
  Route::get('deleteall', 'ItemCategoryController@deleteall')->name('deleteall');
  Route::resource('/', 'ItemCategoryController')->parameters(['' => 'id']);
});

// ITEM - INCOMINGS
Route::group([
  'as' => 'main.item.incomings.',
  'prefix' => 'dashboard/item-incomings',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'ItemIncomingController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ItemIncomingController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ItemIncomingController@enable')->name('enable');
  Route::get('disable/{id}', 'ItemIncomingController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ItemIncomingController@status')->name('status');
  Route::get('delete/{id}', 'ItemIncomingController@delete')->name('delete');
  Route::get('deleteall', 'ItemIncomingController@deleteall')->name('deleteall');
  Route::resource('/', 'ItemIncomingController')->parameters(['' => 'id']);
});

// ITEM - OUTCOMINGS
Route::group([
  'as' => 'main.item.outcomings.',
  'prefix' => 'dashboard/item-outcomings',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'ItemOutcomingController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ItemOutcomingController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ItemOutcomingController@enable')->name('enable');
  Route::get('disable/{id}', 'ItemOutcomingController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ItemOutcomingController@status')->name('status');
  Route::get('delete/{id}', 'ItemOutcomingController@delete')->name('delete');
  Route::get('deleteall', 'ItemOutcomingController@deleteall')->name('deleteall');
  Route::resource('/', 'ItemOutcomingController')->parameters(['' => 'id']);
});
