<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mmpi;
use App\Mmpi_result;
use App\Consent;
use Auth;

class MmpiController extends Controller
{
	public function index(){
		$consents = Consent::all();
    	$mmpis = Mmpi::inRandomOrder()->get();
    	return view ('mmpi.mmpi', compact('mmpis', 'consents'));
    }

    public function user(){
        $consents = Consent::all();
        $mmpis=Mmpi_result::where('user_id', Auth::user()->id)->get();

        return view ('mmpi.user', compact('mmpis', 'consents'));
    }

    public function admin(){
    	$mmpis = Mmpi::all();
        // dd($mmpis);
    	return view ('mmpi.adminmmpi', compact('mmpis'));
    }

    public function input(){
    	return view ('mmpi.inputmmpi');
    }

    public function store(Request $Request){
     	// dd($Request->all());
     	$question = new Mmpi;

     	$question->question = $Request->question;

     	$question->save();

    	return redirect()->back();
    }

    public function destroy($id){
    	$test = Mmpi::with('test')->where('id', $id)->delete();
    	return redirect()->back();
    }

    public function answer(Request $Request){
        // dd($Request->testid[0]);

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
        $consent->category_id = '4';
        $consent->status = 'MMPI dalam proses penilaian';
        $consent->comment = 'Masih dalam proses pemeriksaan';

        Mmpi_result::insert($data);
        $consent->save();

        return redirect()->route('mmpi.user');
    }

    public function result(){
       $consents=Consent::where('category_id', 4)->get();

       return view ('mmpi.resultmmpi', compact('consents'));
    }

    public function detail($id){
        $results=Mmpi_result::where('user_id', $id)->get();

        return view ('mmpi.mmpitestdetail', compact('results'));
    }
}
