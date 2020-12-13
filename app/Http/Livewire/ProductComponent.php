<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductComponent extends GeneralComponent
{
    public $productCategoryCreateMode = false;

    protected $listeners = [
        'destroy_productCreateModal' => 'exitCreateMode',
        //'productAdded' => 'refreshProductList',
    ];

    public function render()
    {
        return view('livewire.product-component');
    }

    public function refreshProductList()
    {
        $this->emit('refreshProductList');
    }

    public function createProductCategory()
    {
        $this->productCategoryCreateMode = true;
    }
}
