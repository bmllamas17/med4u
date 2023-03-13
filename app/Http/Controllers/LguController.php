<?php

namespace App\Http\Controllers;

use App\Models\Lgu;
use Illuminate\Http\Request;

class LguController extends Controller
{
    public function insert_lgu(Request $request)
    {
        $formFields = $request->validate([
            'province'           =>  'required',
            'citymun'            =>  'required',
            'link_token'         =>  'required',
            'capital'            =>  'required',
            'population'         =>  'required',
            'zip_code'           =>  'required',
            'lgu_description'    =>  'required'
        ]);
       
        $lgu_id = Lgu::create($formFields);
        // return response($lgu_id);
        toastr()->success('LGU Added Successfully!');
        return redirect('/lgu');
    }
}
