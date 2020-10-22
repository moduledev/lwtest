<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class Filter extends Component
{
    public $categories;
    public $selectedAttr = [];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function selectAttribute()
    {
        foreach ($this->selectedAttr as $key => $value) {
            if (!$value) unset($this->selectedAttr[$key]);
        }

        $this->emit('addFilterParameter', array_keys($this->selectedAttr));
    }

    public function render()
    {
        return view('livewire.filter', ['categories' => $this->categories,]);
    }
}
