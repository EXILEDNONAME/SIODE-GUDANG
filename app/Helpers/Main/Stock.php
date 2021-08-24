<?php

use App\Models\Backend\Main\CategoryStock;

function category_stocks() {
  $items = CategoryStock::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}
