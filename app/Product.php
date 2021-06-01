<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function state()
  {
    return $this->hasOne(Area::class, 'id', 'area_id');
  }
  public function user()
  {
    return $this->hasOne(User::class, 'id', 'user_id');
  }
}
