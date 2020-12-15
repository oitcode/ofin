<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Product;

class InventoryComponent extends GeneralComponent
{
    public $products = null;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.inventory-component');
    }
}
