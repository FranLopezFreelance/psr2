<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
  protected $fillable = [
      'name', 'lastname', 'sex', 'age', 'province_id', 'city', 'studies', 'ocupation', 'telephone', 'email', 'comments'
  ];
}
