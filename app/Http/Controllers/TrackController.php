<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Code;

class TrackController extends Controller
{
	public function getIndex()
	{
		return view('welcome');
	}

    public function postTrack(Request $request)
    {
    	$this->validate($request,[
			'code' => 'required'
			]);

    	$code = $request->code;
    	
    	$codes = Code::where('code','=',$code)->first();

    	return view('track')->withCodes($codes);


    	
    }	
}
