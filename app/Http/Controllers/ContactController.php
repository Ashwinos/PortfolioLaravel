<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
        $data = $request->all();
        $message = Contact::create($data);
        return redirect()->back();

    }
}
