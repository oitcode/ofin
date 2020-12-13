<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ProductCategory;

class ProductCategoryCreate extends Component
{

    public $name = "";
    public $comment = "";

    public function render()
    {
        return view('livewire.product-category-create');
    }

    public function store()
    {
        /* Validate data */
        $validatedData = $this->validate([
            'name' => 'required|string|unique:product_category',
            'comment' => 'nullable|string',
        ]);

        $productCategory = ProductCategory::create($validatedData);

        $this->emit('productCategoryAdded');
        $this->emit('toggle_productCategoryCreateModal');
    }
}

