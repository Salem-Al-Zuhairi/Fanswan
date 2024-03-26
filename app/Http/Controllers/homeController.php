<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function index()

    {
        $products = Product::all();     
        return view("home",compact('products'));
    }
}
