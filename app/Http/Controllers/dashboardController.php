<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    function index() {

        $s = isset(Auth::User()->is_admin);
        if($s){
            $j = true;
            return view('dashboard', compact('j', 's'));  
        }
        else{
            return redirect()->route('home', compact('s'));
        }               
    }
}
