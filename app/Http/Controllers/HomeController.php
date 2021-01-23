<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // $consents = Consent::where('user_id', Auth::user()->id)->get();

        // dd($consents);

        return view ('home', compact('consents', 'srq', 'bdi', 'dass'));
        // return view ('home');
    }

    public function notification(){

    }
}
