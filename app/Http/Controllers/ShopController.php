<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $category = \request('category');
        $products  = Product::with('category')->inRandomOrder()->paginate(12);
        $sales = Product::with('category')->sale()->get();

        if (isset($category)){
            $products = Product::whereHas('category', function ($query) use ($category){
                $query->where('name', $category);
            })->paginate(12);
        }

        return view('shops', compact('products', 'sales'));
    }

    public function show(Product $product)
    {
        return view('shop', compact('product'));
    }
}
