<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career7;
use Session;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('done');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Career7();
/*
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'faculty' => 'required',
            'uni' => 'required',
            'NID' => 'required',
            'workshop' => 'required'
        ]);
*/
        $this->validate($request,[
            'phone' => 'required|unique:career7',
            'NID' => 'required|unique:career7'
        ]);
        $data->name = $request->name;
        $data->mail = $request->email;
        $data->phone = $request->phone;
        $data->faculty = $request->faculty;
        $data->NID = $request->NID;
        $data->department = $request->department;
        $data->uni = $request->uni;
        $data->session = $request->session[0];
        $data->save();
        
        return redirect()->route('c7done');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
