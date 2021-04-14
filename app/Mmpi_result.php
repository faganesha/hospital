<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mmpi_result extends Model
{
	protected $fillable = ['user_id', 'test_id', 'answer'];

	public function result(){
		return $this->belongsTo('App\Mmpi','test_id');
	} 
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}
}
