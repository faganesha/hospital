<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consent extends Model
{
    protected $fillable = ['user_id', 'category_id', 'status', 'dassresult_id', 'dass_stress', 'dass_depression', 'dass_anxiety'];

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function category(){
    	return $this->belongsTo('App\Result','category_id');
    }

    public function dassresult(){
    	return $this->belongsTo('App\Dassresult','dassresult_id');
    }
}
