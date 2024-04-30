<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    
//
    public function show($id)
    {
        $user = Auth::User();
        $j=false;
        if (isset($user->is_admin)) {
            $j = $user->is_admin;
        }
        $product = Product::find($id);
        return view('Product', compact('product', 'j'));
    }
    
}
