<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = \Cart::getContent();

        return view('cart', compact('carts'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        \Cart::add($request->id, $request->name, $request->quantity, $request->price)
            ->assosiate('App/Models/Product');

        return redirect()->route('cart.index')->with('success message', 'Item was added to your cart');
    }
}
