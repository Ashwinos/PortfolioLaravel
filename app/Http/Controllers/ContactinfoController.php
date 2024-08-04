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
        $infos = Contactinfo::get();

        return view('Admin.contactinfo', compact('infos'));

    }
}
