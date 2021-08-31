<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Catalog;

class Catalogs extends Seeder {
  public function run() {
    $data = [
      [
        'id_category'   => '1',
        'code'          => '#43508-B/30',
        'name'          => 'T-Shirt Polos',
        'size'          => 'S',
        'color'         => 'Black',
        'created_at'    => Carbon::now(),
      ],
      [
        'id_category'   => '2',
        'code'          => '#43508-G/42',
        'name'          => 'Vans Formal',
        'size'          => '42',
        'color'         => 'Gray',
        'created_at'    => Carbon::now(),
      ],
      [
        'id_category'   => '3',
        'code'          => '#43508-B/-',
        'name'          => 'Topi Badut',
        'size'          => '-',
        'color'         => 'Black',
        'created_at'    => Carbon::now(),
      ],
      [
        'id_category'   => '4',
        'code'          => '#43508-W/30',
        'name'          => 'Kemeja Kerah Polos',
        'size'          => '30',
        'color'         => 'White',
        'created_at'    => Carbon::now(),
      ],
    ];

    Catalog::insert($data);
  }
}
