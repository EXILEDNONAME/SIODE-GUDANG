<?php

use App\Models\Backend\Main\Supplier;

function suppliers() {
  $items = Supplier::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}
