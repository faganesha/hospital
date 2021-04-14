<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mini_result extends Model
{
	protected $fillable = ['user_id', 'test_id', 'answer'];

	public function result(){
		return $this->belongsTo('App\Mini','test_id');
	}
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}
}
