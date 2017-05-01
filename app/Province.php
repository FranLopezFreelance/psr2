<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  public function polls(){
      return $this->hasMany('App\Poll');
  }
}
