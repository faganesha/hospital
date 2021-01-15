<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consent;
use Auth;

class ConsentController extends Controller
{
	public function store(Request $Request){

		$consent = new Consent();

		$consent->status = $Request->status;
		$consent->comment = $Request->comment;
		$consent->user_id = Auth::user()->id;;
		$consent->category_id = $Request->category_id;

		$consent->save();

		return redirect()->route("resultSrq")->with('success');
	}
}
