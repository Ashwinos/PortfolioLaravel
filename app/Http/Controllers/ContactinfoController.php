<?php

namespace App\Http\Controllers;
use App\Models\Contactinfo;

use Illuminate\Http\Request;

class ContactinfoController extends Controller
{
    public function contactinfo(Request $request){
        $data = $request->all();
        $info = Contactinfo::create($data);
        return redirect()->back();

    }
    public function contactlist(){
        $infos = Contactinfo::all();

        return view('Admin.contactinfo', compact('infos'));

    }
}
