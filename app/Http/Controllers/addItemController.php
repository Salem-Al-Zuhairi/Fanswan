<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addItemController extends Controller
{
    function index()
    {
        if (isset(Auth::User()->is_admin)) {
            if (Auth::User()->is_admin) {
                $j = true;
                return view("addItem", compact("j"));
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('home');
        }
    }

    function add(Request $request)
    {
        $product = new product();
        $product->NAME = $request->name;
        $product->price = $request->price;
        $product->about = $request->about;
        $product->brand = $request->brand;
        $product->cpu_model = $request->cpu;
        $product->graphics_card = $request->gpu;
        $product->images = $request->images;
        $product->model_name = $request->model;
        $product->ram = $request->memory;
        $product->screen_size = $request->screen;
        $product->os = $request->os;
        $product->storge = $request->storage;
        $product->save();
        return redirect()->route('dashboard');
    }
}
