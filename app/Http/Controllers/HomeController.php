<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
        // if(!Session::get('login')){
        //     return redirect('login')->with('alert','You Need To login first!');
        // }
        // else{
        //     return view('user');
        // }
    }
}
