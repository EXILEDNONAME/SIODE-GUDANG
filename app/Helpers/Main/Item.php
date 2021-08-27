<?php

use App\Models\Backend\Main\Supplier;
use App\Models\Backend\Main\ItemCategory;

function suppliers() {
  $items = Supplier::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function item_categories() {
  $items = ItemCategory::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}
