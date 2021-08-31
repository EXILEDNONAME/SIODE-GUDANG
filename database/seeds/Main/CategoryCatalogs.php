<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\CategoryCatalog;

class CategoryCatalogs extends Seeder {
  public function run() {
    $data = [
      [
        'name'          => 'Kaos',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Sepatu',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Topi',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Kemeja',
        'created_at'    => Carbon::now(),
      ],
    ];

    CategoryCatalog::insert($data);
  }
}
