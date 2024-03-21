<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\start;
class startController extends Controller
{
    function index()
    {
      $c=start::all();
       return view ('start',compact('c'));
    }
}
