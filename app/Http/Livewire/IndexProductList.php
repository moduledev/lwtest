<?php

namespace App\Http\Livewire;

use App\Category;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Product;
use Livewire\WithPagination;

class IndexProductList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category = null;

    protected $listeners = ['addFilterParameter'];

    public function addFilterParameter($ids)
    {
        $this->reset('category');
        $this->category = $ids;
    }

    public function render(Request $request)
    {
        $request->category ? $this->category = (array)$request->category : $request->category = null;
        $query = Product::with(['category']);

       if($this->category){
           $query->whereHas('category', function ($query) use ($request) {
               $query->whereIn('name',$this->category);
           });
       }


        return view('livewire.index-product-list', ['products' => $query->paginate(2),]);
    }
}
