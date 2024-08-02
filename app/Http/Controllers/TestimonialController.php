<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class TestimonialController extends Controller
{
    public function testimonial(){
        
        $messages= Contact::all();
        return view('Home.testimonial')->with(['messages'=>$messages]);

    }
}
