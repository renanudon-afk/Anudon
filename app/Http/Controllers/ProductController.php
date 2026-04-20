<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    function product_pagination()
    {
    	$product = Product::all();
    	return view('product.product_pagination', compact('product'));
    }
    function store_product(Request $request)
    {
    	$store_product = new Product();
    	$store_product->name = $request->a_name;
    	$store_product->save();
    	return back();
    }
}
