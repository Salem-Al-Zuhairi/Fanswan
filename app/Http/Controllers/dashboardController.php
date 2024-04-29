<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    function index() {
        $j = true;
        return view('dashboard', compact('j'));
    }
}
