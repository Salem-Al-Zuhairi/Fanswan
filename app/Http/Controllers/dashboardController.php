<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashBoardController extends Controller
{
    function index() {
        $j = true;
        return view('dashboard', compact('j'));
    }
}
