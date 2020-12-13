<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductComponent extends GeneralComponent
{
    public $productCategoryCreateMode = false;

    public $createProductCategoryMode = false;

    protected $listeners = [
        'destroy_productCreateModal' => 'exitCreateMode',
        'destroy_productCategoryCreateModal' => 'exitProductCategoryCreateMode',
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
        $this->createProductCategoryMode = true;
    }

    public function exitProductCategoryCreateMode()
    {
        $this->createProductCategoryMode = false;
    }
}
