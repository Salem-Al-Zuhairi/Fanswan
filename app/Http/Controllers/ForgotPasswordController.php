<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    function index() {
        return view('ForgotPassword');
    }
}
