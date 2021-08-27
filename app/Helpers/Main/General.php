<?php

use App\Models\Backend\Main\Catalog;
use App\Models\Backend\Main\CategoryStock;
use App\Models\Backend\Main\CategoryCatalog;

function catalogs() {
  $items = Catalog::orderBy('code','asc')->where('active', 1)->pluck('code', 'id')->toArray();
  return $items;
}

function category_stocks() {
  $items = CategoryStock::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function category_catalogs() {
  $items = CategoryCatalog::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}
