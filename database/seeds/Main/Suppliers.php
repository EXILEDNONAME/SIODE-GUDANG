<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Supplier;

class Suppliers extends Seeder {
  public function run() {
    $data = [
      [
        'name'          => 'Supplier 1',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Supplier 2',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Supplier 3',
        'created_at'    => Carbon::now(),
      ],
    ];

    Supplier::insert($data);
  }
}
