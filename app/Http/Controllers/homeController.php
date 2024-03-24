<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function index()

    {
        $data = product::all();
        return view("home", compact("data"));
    }
}
