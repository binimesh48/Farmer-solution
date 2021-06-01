<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
  public function state()
  {
    return $this->hasOne(Area::class, 'id', 'area_id');
  }
}
