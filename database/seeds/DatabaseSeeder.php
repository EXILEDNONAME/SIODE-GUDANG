<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  public function run() {
    $this->call(DefaultSeeder::class);
    $this->call(Suppliers::class);
    $this->call(CategoryCatalogs::class);
    $this->call(Catalogs::class);
  }
}
