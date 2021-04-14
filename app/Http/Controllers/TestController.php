<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Consent;
use Auth;

class TestController extends Controller
{
    public function indexsrq(){
        $consents = Consent::where('user_id', Auth::user()->id)->get();
        $tests=Test::where('category_id', '1')->get();

        return view ('pages.srqtest', compact('tests', 'consents'));
    }

    public function indexbdi(Request $Request){
        $consents = Consent::where('user_id', Auth::user()->id)->get();
        $tests=Test::where('category_id', '3')->get();

        return view ('pages.bditest', compact('tests', 'consents'));
    }

    public function indexdass(Request $Request){
        $consents = Consent::where('user_id', Auth::user()->id)->get();
        $tests=Test::where('category_id', '2')->get();

        return view ('pages.dasstest', compact('tests', 'consents'));
    }

    public function srqtest(){
    	$tests=Test::where('category_id', '1')->get();

    	return view ('admin.srqtest', compact('tests'));
    }

    public function dasstest(){
        $tests=Test::where('category_id', '2')->get();

        return view ('admin.dasstest', compact('tests'));
    }

    public function bditest(){
        $tests=Test::where('category_id', '3')->get();

        return view ('admin.bditest', compact('tests'));
    }

    public function addsrqtest(){
    	return view ('admin.addsrqtest');
    }

    public function addbditest(){
        return view ('admin.addbditest');
    }

    public function adddasstest(){
        return view ('admin.adddasstest');
    }

    public function addTestQuestion(Request $Request){
    	$test= new Test();

    	$test->question = $Request->question;
    	$test->category_id = $Request->category_id;

        $test->save();

        if($test->category_id == '1'){
            return redirect()->route('test.srq')->with('success', 'test berhasil ditambah');
        }
        elseif ($test->category_id == '2') {
            return redirect()->route('test.dass')->with('success', 'test berhasil ditambah');
        }

        $test->save();

    	// return redirect()->route('test_admin')->with('success', 'test berhasil ditambah');
        // return redirect()->back();
    }

    public function addTestBdi(Request $Request){
        $test= new Test();

        $test->question = $Request->question;
        $test->category_id = $Request->category_id;
        $test->a = $Request->a;
        $test->b = $Request->b;
        $test->c = $Request->c;
        $test->d = $Request->d;

        $test->save();

        // return redirect()->route('test_admin')->with('success', 'test berhasil ditambah');
        return redirect()->route('test.bdi')->with('success', 'test berhasil ditambah');
    }

    public function destroy($id){
    	$test = Test::where('id', $id)->delete();
    	return redirect()->back();
    }
}
