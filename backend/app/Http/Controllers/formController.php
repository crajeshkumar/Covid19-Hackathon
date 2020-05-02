<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
class formController extends Controller
{
    //
     public function create()
    {
        
        return view('form');
       
    }
    public function store()
    {   $newForm = new Form();
        $newForm->name = request('uname');
        $newForm->phnum = request('phone');
        $newForm->email = request('email');
        $newForm->pincode = request('pincode');
        $newForm->reliefMat = request('selectList');
        $newForm->description=request('desc');

        $newForm->save();
        return redirect('/formsuccess')->with('msg','Form submitted');
    }
}
