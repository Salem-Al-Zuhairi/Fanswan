<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    function index() {
        $user = Auth::User();
        $j=false;
        if (isset($user->is_admin)) {
            $j = $user->is_admin;
        }
        $products = Product::all();    
        return view("home",compact('products', 'j'));
    }
}
