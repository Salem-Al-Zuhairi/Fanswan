<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class ForgotPasswordController extends Controller
{
    function index() {
        if(Auth::check()){
            return redirect()->route('home');
        }else{
        return view('ForgotPassword');
        }
    }
}
