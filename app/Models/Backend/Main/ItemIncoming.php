<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Catalog;
use App\Models\Backend\Main\Supplier;

class ItemIncoming extends Model {

  use LogsActivity;

  protected $table = 'item_incomings';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  Public function catalogs(){
    return $this->belongsTo(Catalog::class, 'id_catalog');
  }

  Public function suppliers(){
    return $this->belongsTo(Supplier::class, 'id_supplier');
  }

}
