<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
     protected $fillable = ['question', 'detail'];

     public function result(){
     	return $this->hasMany('test_id');
     }
}
