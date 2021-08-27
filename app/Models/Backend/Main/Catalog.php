<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\CategoryCatalog;

class Catalog extends Model {

  use LogsActivity;

  protected $table = 'catalogs';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function category_catalogs(){
    return $this->belongsTo(CategoryCatalog::class, 'id_category');
  }

}
