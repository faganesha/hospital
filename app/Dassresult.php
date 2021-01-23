<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dassresult extends Model
{
    protected $fillable = ['depresi', 'kecemasan', 'stress'];

       public function dassresult(){
    	return $this->hasOne('dassresult_id');
    }
}
