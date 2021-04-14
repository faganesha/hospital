<?php

namespace App\Http\Controllers;

use App\Mmpi_result;
use Illuminate\Http\Request;
use App\Mini;
use App\Mini_result;
use App\Consent;
use Auth;


class MiniController extends Controller
{
	public function index(){
		$consents = Consent::all();
		$minis = Mini::all();
		return view ('mini.mini', compact('minis', 'consents'));
	}

    public function user(){
        $consents = Consent::all();
        $minis=Mini_result::where('user_id', Auth::user()->id)->get();

        return view ('mini.user', compact('minis', 'consents'));
    }

	public function admin(){
		$minis = Mini::all();
		return view ('mini.adminmini', compact('minis'));
	}

	public function input(){
		return view ('mini.inputmini');
	}

	public function store(Request $Request){
     	// dd($Request->all());
		$question = new Mini;

		$question->question = $Request->question;

		$question->save();

		return redirect()->back();
	}

	public function destroy($id){
		$test = Mini::with('test')->where('id', $id)->delete();
		return redirect()->back();
	}

	public function answer(Request $Request){
        // dd($Request->all());

		$data=[];

		for ($i=0; $i < sizeof($Request->testid); $i++) {

			$data[$i]=[
				'user_id'=>Auth::user()->id,
				'test_id'=>$Request->testid[$i],
				'answer' =>$Request->answer[$Request->testid[$i]],
			];
		}

		$consent = new Consent();
		$consent->user_id = Auth::user()->id;
		$consent->category_id = '5';
		$consent->status = 'MINI dalam proses penilaian';
		$consent->comment = 'Masih dalam proses pemeriksaan';

		Mini_result::insert($data);
		$consent->save();

		return redirect()->route('home');
	}

	 public function result(){
       $consents=Consent::where('category_id', 5)->get();

       return view ('mini.resultmini', compact('consents'));
    }

    public function detail($id){
        $results=Mini_result::where('user_id', $id)->get();

        return view ('mini.minitestdetail', compact('results'));
    }
}
