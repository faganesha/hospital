<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use Auth;
use App\Consent;
use App\Categories;

class ResultController extends Controller
{
	public function store(Request $Request){

		$data=[];

		for ($i=0; $i < sizeof($Request->testid); $i++) { 

			$data[$i]=[
				'user_id'=>Auth::user()->id,
				'test_id'=>$Request->testid[$i],
				'answer' =>$Request->answer[$Request->testid[$i]],
				'category_id' =>$Request->category_id,
			];
		}

		// dd($data);

		Result::insert($data);

		return redirect()->route('consent')->with('success', 'test berhasil diambil');
	}

	// public function index(Request $Request){
	// 	$results=Result::where('category_id', $Request->result)->where('user_id', Auth::user()->id)->get();
	// 	$consents = Consent::where('user_id', Auth::user()->id)->get();

	// 	return view ('pages.result', compact('results', 'consents'));
	// }

	public function srq(){
		$results=Result::where('category_id', '1')->where('user_id', Auth::user()->id)->get();
		$consents = Consent::where('user_id', Auth::user()->id)->get();

		return view ('pages.result', compact('results', 'consents'));
	}

	public function consent(Request $Request){
		$results=Result::where('category_id', $Request->result)->where('user_id', Auth::user()->id)->get();
		$consents = Consent::where('user_id', Auth::user()->id)->get();

		return view ('pages.consentsrq', compact('results', 'consents'));
	}

	public function srqtestresult(){
		$results=Result::all();
		$categories=Categories::all();
		$srqtes=Consent::where('category_id', 1)->get();

		// dd($consents);
		return view ('admin.srqtestresult', compact('results', 'categories', 'srqtes'));
	}

	public function srqtestdetail($id){
		$results=Result::where('user_id', $id)->where('category_id', 1)->get();

		return view ('admin.tesdetail', compact('results'));
	}

	// public function printsrq(){
	// 	$srqtes=Consent::where('category_id', 1)->get();

	// 	$pdf = PDF::loadview('admin.srqtestresult', ['srqtes'=>$srqtes]);
	// 	return $pdf->download('laporan-tes-srq-pdf');
	// }
}
