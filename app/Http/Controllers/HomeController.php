<?php

namespace App\Http\Controllers;

use App\Consent;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $consents = Consent::where('user_id', Auth::user()->id)->get();
        $srq = Consent::where('user_id', Auth::user()->id)->where('category_id', '1')->get();
        $dass = Consent::where('user_id', Auth::user()->id)->where('category_id', '2')->get();
        $bdi = Consent::where('user_id', Auth::user()->id)->where('category_id', '3')->get();
        $mmpi = Consent::where('user_id', Auth::user()->id)->where('category_id', '4')->get();
        $mini =Consent::where('user_id', Auth::user()->id)->where('category_id', '5')->get();
        // $consents = Consent::where('user_id', Auth::user()->id)->get();

        // dd($consents);

        return view('home', compact('consents', 'srq', 'bdi', 'dass', 'mini', 'mmpi'));
        // return view ('home');
    }

    public function test()
    {
        $consents = Consent::where('user_id', Auth::user()->id)->get();
        $srq = Consent::where('user_id', Auth::user()->id)->where('category_id', '1')->get();
        $dass = Consent::where('user_id', Auth::user()->id)->where('category_id', '2')->get();
        $bdi = Consent::where('user_id', Auth::user()->id)->where('category_id', '3')->get();
        $mmpi = Consent::where('user_id', Auth::user()->id)->where('category_id', '4')->get();
        $mini =Consent::where('user_id', Auth::user()->id)->where('category_id', '5')->get();

//        dd($mini);
        // $consents = Consent::where('user_id', Auth::user()->id)->get();

        // dd($consents);

        return view('test', compact('consents', 'srq', 'bdi', 'dass', 'mini', 'mmpi'));
        // return view ('home');
    }

    public function notification()
    {

    }

    public function qrcode()
    {
        $consents = Consent::where('user_id', Auth::user()->id)->get();
        return view('qrcode', compact('consents'));
    }
}
