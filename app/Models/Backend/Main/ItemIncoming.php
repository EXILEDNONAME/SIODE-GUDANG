<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Supplier;
use App\Models\Backend\Main\ItemCategory;

class ItemIncoming extends Model {

  use LogsActivity;

  protected $table = 'item_incomings';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  Public function suppliers(){
    return $this->belongsTo(Supplier::class, 'id_supplier');
  }

  Public function item_categories(){
    return $this->belongsTo(ItemCategory::class, 'id_category');
  }

}
