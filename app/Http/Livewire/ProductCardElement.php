<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PhpParser\Node\Expr\Array_;

class ProductCardElement extends Component
{

    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function deleteItem($id)
    {
        $this->emit('deleteItem', $id);
    }

    public function render()
    {
        return view('livewire.product-card-element');
    }
}
