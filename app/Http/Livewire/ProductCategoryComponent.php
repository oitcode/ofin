<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ProductCategory;

class ProductCategoryComponent extends GeneralComponent
{
    protected $listeners = [
        'destroy_productCategoryCreateModal' => 'exitCreateMode',
        'productCategoryAdded' => 'refreshProductCategoryList',
        'productCategoryDelete',
    ];

    public function render()
    {
        return view('livewire.product-category-component');
    }

    public function refreshProductCategoryList()
    {
        $this->emit('refreshProductCategoryList');
    }

    public function productCategoryDelete(ProductCategory $productCategory)
    {
        $productCategory->delete();
        $this->refreshProductCategoryList();
    }
}
