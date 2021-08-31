<?php

use App\Models\Backend\Main\Catalog;
use App\Models\Backend\Main\CategoryStock;
use App\Models\Backend\Main\CategoryCatalog;
use App\Models\Backend\Main\Supplier;
use App\Models\Backend\Main\ItemCategory;

function catalogs() {
  $items = DB::table('catalogs as a')
    ->join('category_catalogs as b', 'b.id', '=', 'a.id_category')
    ->selectRaw('CONCAT("(", b.name, ") ", a.name, " - ", b.name) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}

function suppliers() {
  $items = Supplier::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function item_categories() {
  $items = ItemCategory::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
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
