<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;



class LoginController extends Controller
{
    public function login(){
       

        return view('Admin.login');

    }
    public function attemptLogin(Request $request){
        $data = $request->except('_token');
       
       
        $validator = Validator::make($request->all(), [ 
    
            'email' => 'required|email',
            'password' => 'required',
          
        ], );

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    //    dd($data);


    }
}
