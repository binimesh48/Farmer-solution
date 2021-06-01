<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public function user()
    {
      return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function state()
    {
      return $this->hasOne(Area::class, 'id', 'area_id');
    }
}
