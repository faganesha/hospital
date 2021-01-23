<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consent;
use Auth;
use App\Result;

class ConsentController extends Controller
{
	public function store(Request $Request){

		$consent = new Consent();

		$consent->status = $Request->status;
		$consent->comment = $Request->comment;
		$consent->user_id = Auth::user()->id;;
		$consent->category_id = $Request->category_id;

		$consent->save();

		if($Request->category_id == '1'){
			return redirect()->route("resultSrq")->with('success');
		}elseif($Request->category_id =='2'){
			return redirect()->route("resultDass")->with('success');
		}else{
			return redirect()->route("resultBdi")->with('success');
		}
	}

	public function consentsrq(){

		$results=Result::where('category_id', '1')->where('user_id', Auth::user()->id)->get();
		$consents = Consent::where('user_id', Auth::user()->id)->get();

		return view ('pages.consentsrq', compact('results', 'consents'));
	}

	public function consentbdi(){

		$results=Result::where('category_id', '3')->where('user_id', Auth::user()->id)->get();
		$consents = Consent::where('user_id', Auth::user()->id)->get();

		return view ('pages.consentbdi', compact('results', 'consents'));
	}

	public function consentdass(){

		$results=Result::where('category_id', '2')->where('user_id', Auth::user()->id)->get();
		$consents = Consent::where('user_id', Auth::user()->id)->get();

		return view ('pages.consentdass', compact('results', 'consents'));
	}
}