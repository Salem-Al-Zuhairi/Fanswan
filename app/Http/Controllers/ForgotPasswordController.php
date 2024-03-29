<?php

namespace App\Http\Controllers;

class ForgotPasswordController extends Controller
{
    function index() {
        return view('ForgotPassword');
    }
}
