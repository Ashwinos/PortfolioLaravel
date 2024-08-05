<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    public function contact(Request $request){
        $data = $request->all();
        $validator = Validator::make($request->all(), [ 
    
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
          
        ], );
        if ($validator->fails()) {
                // dd($validator->errors());
                return redirect()->to(url()->previous() . '#review')
                ->withErrors($validator)
                ->withInput();
            }
           
        
        $message = Contact::create($data);
        return redirect()->back();

    }
}
