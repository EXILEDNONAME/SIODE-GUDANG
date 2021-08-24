<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\CategoryStock;

class Stock extends Model {

  use LogsActivity;

  protected $table = 'stocks';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function category_stocks(){
    return $this->belongsTo(CategoryStock::class, 'id_category');
  }

}
