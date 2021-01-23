<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use Auth;
use App\Consent;
use App\Categories;
use PDF;

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

		Result::insert($data);

		if($Request->category_id == 1){
			return redirect()->route('consentsrq')->with('success', 'test berhasil diambil');
		}
		elseif($Request->category_id == 2){
			return redirect()->route('consentdass')->with('success', 'test berhasil diambil');
		}
		else{
			return redirect()->route('consentbdi')->with('success', 'test berhasil diambil');
		}		
	}

	public function srq(){
		$results=Result::where('category_id', '1')->where('user_id', Auth::user()->id)->get();
		$consents = Consent::where('user_id', Auth::user()->id)->get();

		return view ('results.srq', compact('results', 'consents'));
	}

	public function dass(){
		$results=Result::where('category_id', '2')->where('user_id', Auth::user()->id)->get();
		$consents = Consent::where('user_id', Auth::user()->id)->where('category_id', 2)->get();

		return view ('results.dass', compact('results', 'consents'));
	}

	public function bdi(){
		$results=Result::where('category_id', '3')->where('user_id', Auth::user()->id)->get();
		$consents = Consent::where('user_id', Auth::user()->id)->get();

		return view ('results.bdi', compact('results', 'consents'));
	}

	public function srqtestresult(){
		$results=Result::all();
		$categories=Categories::all();
		$srqtes=Consent::where('category_id', 1)->get();

		return view ('results.srq', compact('results', 'categories', 'srqtes'));
	}

	public function dasstestresult(){
		$results=Result::all();
		$categories=Categories::all();
		$srqtes=Consent::where('category_id', 2)->get();

		return view ('results.dass', compact('results', 'categories', 'srqtes'));
	}

	public function bditestresult(){
		$results=Result::all();
		$categories=Categories::all();
		$srqtes=Consent::where('category_id', 3)->get();

		return view ('results.bdi', compact('results', 'categories', 'srqtes'));
	}

	public function srqtestdetail($id){
		$results=Result::where('user_id', $id)->where('category_id', 1)->get();

		return view ('testDetail.srqdetail', compact('results'));
	}

	public function dasstestdetail($id){
		$results=Result::where('user_id', $id)->where('category_id', 2)->get();
		$dasstests=Consent::where('category_id', 2)->get();

		return view ('testDetail.dassdetail', compact('results', 'dasstests'));
	}

	public function scoredass(Request $Request){
		Consent::whereId($Request->id)->update([
			'comment' => $Request->updatestatus,
			'dass_stress' =>$Request->dass_stress,
			'dass_depression' =>$Request->dass_depression,
			'dass_anxiety' =>$Request->dass_anxiety,
			'status' => $Request->status,
		]);

		return redirect()->back();
	}

	public function dasstestedit($id){
		$dasstests=Consent::where('id', $id)->get();

		// dd($dasstests);

		return view ('testDetail.dassedit', compact('dasstests'));
	}

	public function dasstestupdate(Request $Request){
		$validate = $Request->validate([
			'dass_depression' => 'required',
			'dass_anxiety'=> 'required',
			'dass_stress'=> 'required',
		]);

		Consent::whereId($Request->id)->update($validate);

		return redirect ('/dasstestresult');
	}

	public function bditestdetail($id){
		$results=Result::where('user_id', $id)->where('category_id', 3)->get();

		return view ('testDetail.bdidetail', compact('results'));
	}

	public function printsrq(){
		$srqtests=Consent::where('category_id', 1)->get();

		$pdf = PDF::loadview('print.srq', ['srqtests'=>$srqtests]);
		return $pdf->download('laporan-tes-srq-pdf');

		// return view ('print.srq', compact('srqtests'));
	}
}
