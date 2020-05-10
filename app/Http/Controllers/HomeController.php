<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $latestProductFirst = Product::with('category')->latest()->inRandomOrder()->take(3)->get();
        $latestProductTwo = Product::with('category')->latest()->inRandomOrder()->take(3)->get();
        $topRatedOne = Product::with('category')->inRandomOrder()->take(3)->get();
        $topRatedTwo = Product::with('category')->inRandomOrder()->take(3)->get();
        $reviewProductOne = Product::with('category')->inRandomOrder()->take(3)->get();
        $reviewProductTwo = Product::with('category')->inRandomOrder()->take(3)->get();

        return view('welcome', compact('categories', 'latestProductFirst', 'latestProductTwo', 'topRatedOne', 'topRatedTwo',
            'reviewProductOne', 'reviewProductTwo'
        ));
    }

//    public function index()
//    {
//        return view('home');
//    }
}
