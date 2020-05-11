<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;

    public function render()
    {
        $products = \App\Models\Product::with('category')->latest()->paginate(12);
        return view('livewire.product', compact('products'));
    }
}
