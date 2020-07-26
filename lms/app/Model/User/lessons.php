<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    public function courses(){
    	return $this->belongsTo('App\Model\User\courses');
    }

      public function lessons(){
    	return $this->belongsTo('App\Model\User\categories');
    }

}
