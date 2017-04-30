<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'subject', 'message', 'text', 'view', 'cantacted'
    ];

    public function response(){
        return $this->hasMany('App\Response', 'contact_id');
    }

}
