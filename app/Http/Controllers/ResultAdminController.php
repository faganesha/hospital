<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use Auth;
use App\Consent;
use App\Categories;

class ResultAdminController extends Controller
{
	public function srq(){
		$results=Result::all();
		$categories=Categories::all();
		$srqtes=Consent::where('category_id', 1)->get();

		// dd($consents);
		return view ('resultAdmin.adminsrq', compact('results', 'categories', 'srqtes'));
	}

	public function dass(){
		$results=Result::all();
		$categories=Categories::all();
		$srqtes=Consent::where('category_id', 2)->get();

		// dd($srqtes);

		// dd($consents);
		return view ('resultAdmin.admindass', compact('results', 'categories', 'srqtes'));
	}

	public function bdi(){
		$results=Result::all();
		$categories=Categories::all();
		$srqtes=Consent::where('category_id', 3)->get();

		// dd($consents);
		return view ('resultAdmin.adminbdi', compact('results', 'categories', 'srqtes'));
	}
}
