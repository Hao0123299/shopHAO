<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::where('status', 1)->get();
        //dd($product);
        return view('front.index', compact('product'));
    }
}
