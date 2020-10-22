<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class ProductCard extends Component
{
    public $productList;
    public $total;

    protected $listeners = ['productAdded'];

    public function productAdded($product)
    {
        dd($product);
        Cookie::queue('test','test data', 10);

    }

    public function deleteItem($id)
    {
        dd($this->productList);
    }


    public function mount()
    {
        $this->productList = [];
    }

    public function render()
    {
        return view('livewire.product-card');
    }
}
