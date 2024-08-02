<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function dashboard(){
        $messages= Contact::all();
        return view('Admin.dashboard',compact('messages'));
    }
}
