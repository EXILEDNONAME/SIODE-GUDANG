<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemIncomingsTable extends Migration {
  public function up() {
    Schema::create('item_incomings', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_catalog')->unsigned();
      $table->integer('id_supplier')->unsigned();
      $table->timestamp('date_start')->nullable();
      $table->timestamp('date_end')->nullable();
      $table->integer('quantity')->nullable();
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_catalog')->references('id')->on('catalogs')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_supplier')->references('id')->on('suppliers')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('item_incomings');
  }
}
