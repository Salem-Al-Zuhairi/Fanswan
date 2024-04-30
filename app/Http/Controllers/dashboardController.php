<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    function index()
    {
        if (isset(Auth::User()->is_admin)) {
            if (Auth::User()->is_admin) {
                $j = true;
                return view('dashboard', compact('j'));
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('home');
        }
    }
}
