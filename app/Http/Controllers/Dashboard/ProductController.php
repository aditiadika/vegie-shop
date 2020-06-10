<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.product.index');
    }

    public function create()
    {
        $categories = Category::where('status', true)->get();
        return view('dashboard.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|integer',
            'name' => 'required',
            'is_sale' => 'required',
            'price_before_sale' => 'required_if:is_sale,==,true',
            'discount' => 'required_if:is_sale,==,true',
            'price' => 'required|numeric',
            'description' => 'required',
            'weight' => 'required',
            'quantity' => 'required|numeric'
        ]);

        $product = new Product;
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->is_sale = $request->is_sale;
        $product->price_before_sale = $request->price_before_sale;
        $product->discount = $request->discount;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->weight = $request->weight;
        $product->quantity = $request->quantity;
        $product->save();

        if (request()->hasFile('file')) {
            foreach (request()->file as $key) {
                $product->addMedia($key)->preservingOriginal()->toMediaCollection('products');
            }
        }

        toast('Your product has been created', 'success');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::where('status', true)->get();
        $media = $product->getMedia('products');

        return view('dashboard.product.edit', compact('categories', 'product', 'media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
