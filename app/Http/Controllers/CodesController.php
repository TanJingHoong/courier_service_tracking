<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Code;
use Session;

class CodesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes = Code::orderBy('id','desc')->paginate(10);
        return view('codes.index')->withCodes($codes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('codes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,array
            (
                'code' => 'required',
                'status'  => 'required'

            ));

         $code = new Code;

         $code->code = $request->code;
         $code->status = $request->status;

         $code->save();

         Session::flash('success','The tracking code was successfully save!'); //flash session on one request('key to be call','value') put = session lifetime/ flash=one page request

                //redirect to another page
                return redirect()->route('codes.index');
    }

   
    public function edit($id)
    {
        $code = Code::find($id);

        return view('codes.edit')->withCode($code);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $code = Code::find($id);
        $this->validate($request,array
            (
                'code' => 'required',
                'status'  => 'required'

            ));

        $code = Code::find($id);

        $code->code = $request->code;
        $code->status = $code->status;

        $code->save();

        Session::flash('success','The tracking code was successfully edited!');

        return redirect()->route('codes.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $code = Code::find($id);

        $code->delete();

        Session::flash('success','The code was successfully deleted.');
        return redirect()->route('codes.index');
    }
}
