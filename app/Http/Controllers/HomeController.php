<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Contactinfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $messages= Contact::all();
        $infos = Contactinfo::all();
        return view('Home.home')->with(['messages'=>$messages],['infos'=>$infos]);
    }
}
