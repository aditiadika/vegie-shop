<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $carts = \Cart::getContent();

        return view('cart', compact('carts'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
//            \Cart::clear();
            \Cart::add($request->id, $request->name, $request->price, $request->quantity)
                ->associate(Product::class);
        } catch (\Exception $e){
            DB::rollBack();
            toast('Ops.. try again','success');
            return back();
        }
        DB::commit();

        toast('Item was added to your cart','success');
        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        \Cart::remove($id);

        toast('Your item has ben deleted.', 'success');
        return back();
    }
}
