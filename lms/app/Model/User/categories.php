<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function courses(){
    	return $this->hasMany('App\Model\User\courses');
    }

     public function lessons(){
    	return $this->hasManyThrough('App\Model\User\lessons',courses::class);
    }

   
}
