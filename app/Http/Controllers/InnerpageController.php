<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InnerpageController extends Controller
{
    public function innerpage(){
       

        return view('Home.innerpages.webdesign');

    }
    public function laravel(){
       

        return view('Home.innerpages.laravel');

    }
    public function django(){
       

        return view('Home.innerpages.django');

    }
}
