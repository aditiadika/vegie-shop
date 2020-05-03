<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $latestProductFirst = Product::with('category')->latest()->inRandomOrder()->take(3)->get();
        $latestProductTwo = Product::with('category')->latest()->inRandomOrder()->take(3)->get();

        $products  = Product::with('category')->inRandomOrder()->paginate(12);
        $sales = Product::with('category')->sale()->get();

        return view('shops', compact('categories', 'latestProductFirst', 'latestProductTwo',
            'products', 'sales'
        ));
    }

    public function show(Product $product)
    {
        return view('shop', compact('product'));
    }
}
