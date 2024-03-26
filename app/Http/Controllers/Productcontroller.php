<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    use App\Models\Product;

    public function show($id)
    {

        $product = Product::find($id);
        return view('product.show', compact('product'));
    }
}
