<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Product;
use Livewire\Component;

class IndexProduct extends Component
{
    public $product;
    public $total_price = 0;
    public $selected_count = 1;


    public function addProduct($product, $count = 1)
    {
//        dd(json_decode($product));
        $product = json_decode($product);
        $product->selected_count = $count;
        $product->total_price = $product->price * $this->selected_count;
        $this->emit('productAdded', $product);
    }

    public function addToCart(int $productId): void
    {
        Cart::add(Product::where('id', $productId)->first());
        $this->emit('addToCart');
        $this->emit('urlChange', url());

    }

    public function render()
    {
        return view('livewire.index-product');
    }
}
