<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mandi extends Model
{
  public function area()
  {
    return $this->hasOne(Area::class, 'id', 'area_id');
  }
}
