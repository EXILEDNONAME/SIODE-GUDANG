<?php

// CATALOGS
Route::group([
  'as' => 'main.item.catalogs.',
  'prefix' => 'dashboard/catalogs',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'CatalogController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'CatalogController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'CatalogController@enable')->name('enable');
  Route::get('disable/{id}', 'CatalogController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'CatalogController@status')->name('status');
  Route::get('delete/{id}', 'CatalogController@delete')->name('delete');
  Route::get('deleteall', 'CatalogController@deleteall')->name('deleteall');
  Route::resource('/', 'CatalogController')->parameters(['' => 'id']);
});

// CATEGORY - CATALOGS
Route::group([
  'as' => 'main.item.category-catalogs.',
  'prefix' => 'dashboard/category-catalogs',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'CategoryCatalogController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'CategoryCatalogController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'CategoryCatalogController@enable')->name('enable');
  Route::get('disable/{id}', 'CategoryCatalogController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'CategoryCatalogController@status')->name('status');
  Route::get('delete/{id}', 'CategoryCatalogController@delete')->name('delete');
  Route::get('deleteall', 'CategoryCatalogController@deleteall')->name('deleteall');
  Route::resource('/', 'CategoryCatalogController')->parameters(['' => 'id']);
});
