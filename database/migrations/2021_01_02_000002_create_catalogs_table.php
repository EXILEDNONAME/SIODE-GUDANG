<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogsTable extends Migration {
  public function up() {
    Schema::create('catalogs', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_category')->unsigned();
      $table->string('code')->nullable();
      $table->string('name');
      $table->string('size');
      $table->string('color');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_category')->references('id')->on('category_catalogs')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('catalogs');
  }
}
