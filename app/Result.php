<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Result extends Model
{
    protected $fillable = ['user_id', 'category_id'];

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function result(){
    	return $this->belongsTo('App\Test','test_id');
    } 

    public function categories(){
    	return $this->belongsTo('App\Categories','category_id');
    }
}
