<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //sản phẩm nổi bật, sản phẩm mới, sản phẩm khuyến mãi
        $product = Product::where('status', 1)->get();
        $productNew = Product::where('new', 0)->get();
        $productDiscout = Product::where('discout', 1)->get();
        //dd($product);
        return view('front.index', compact('product', 'productNew', 'productDiscout'));
    }
}
