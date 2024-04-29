<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addItemController extends Controller
{
    function index() {
        $j = true;
        return view("addItem", compact("j"));
    }
}
