<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;




class ContactUsController extends Controller
{
    public function insert_contact_us(Request $request)
    {
        $formFields = $request->validate([
            'name'               =>  'required',
            'designation'        =>  'required',
            'email'              =>  'required',
            'concerns'           =>  'required'
        ]);
       
        $id = ContactUs::create($formFields);
        
        toastr()->success('Message Submitted!');
        return redirect('/contact_us');
    }
}
