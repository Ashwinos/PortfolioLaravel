<?php

namespace App\Http\Controllers;
use App\Models\Contactinfo;
use Validator;

use Illuminate\Http\Request;

class ContactinfoController extends Controller
{
    public function contactinfo(Request $request){
        $data = $request->except('_token');
          $validator = Validator::make($request->all(), [ 
    
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
          
        ], );
        if ($validator->fails()) {
                // dd($validator->errors());
                return redirect()->to(url()->previous() . '#contact')
                ->withErrors($validator)
                ->withInput();
            }
           
        
        $info = Contactinfo::create($data);
        return redirect()->back();

    

        

    }
    public function contactlist(){
        $infos = Contactinfo::get();

        return view('Admin.contactinfo', compact('infos'));

    }
    // public function attemptcontactinfo(Request $request){
    //     $data = $request->except('_token');
    //     dd($data);
       
       
        // $validator = Validator::make($request->all(), [ 
    
        //     'email' => 'required|email',
        //     'password' => 'required',
          
        // ], );

        // if ($validator->fails()) {
        //     // dd($validator->errors());
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        
        // if(Auth::attempt($data)){
        //     $request->session()->regenerate();
        //     return redirect()->intended('admin/dashboard');
        // }
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');

        // public function contactinfo(Request $request){
        //     $data = $request->all();
        //     $info = Contactinfo::create($data);
        //     return redirect()->back();
    
        // }


    
}
