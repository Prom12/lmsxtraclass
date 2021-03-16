<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function categories(){
    	return $this->belongsTo('App\Model\User\categories');
    }

     public function lessons(){
    	return $this->hasMany('App\Model\User\lessons');
    }
}
