<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientform;

class patientcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.index');
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
        $inputValues= $request->all();
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'symptoms'=>'required',
            'duration'=>'required',
            'brief'=>'required',
            'address'=>'required',
            'number'=>'required',
            'city'=>'required',
            'state'=>'required',
            'pincode'=>'required'
        ]);
        $arryToString = implode(',',$request->input('symptoms'));
        $data=new patientform;
        $data->name=$request->input('name');
        $data->age=$request->input('age');
        $data->gender=$request->input('gender');
        $data->symptoms=$arryToString;
        $data->symptomsdays=$request->input('duration');
        $data->brief=$request->input('brief');
        $data->address=$request->input('address');
        $data->number=$request->input('number');
        $data->city=$request->input('city');
        $data->state=$request->input('state');
        $data->pincode=$request->input('pincode');
        $data->save();
        return redirect()->back();
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
