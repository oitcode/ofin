<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Product;
use App\ProductCategory;

class ProductCreate extends Component
{
    public $product_category_id;
    public $name;
    public $price;
    public $quantity;
    public $comment;

    public $productCategories = null;

    public function render()
    {
        $this->productCategories = ProductCategory::all();

        return view('livewire.product-create');
    }

    public function store()
    {
        /* Validate data */
        $validatedData = $this->validate([
            'product_category_id' => 'required|integer|exists:product_category',
            'name' => 'required|string|unique:product',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'comment' => 'nullable|string',
        ]);

        $product= Product::create($validatedData);

        $this->emit('productAdded');
        $this->emit('toggle_productCreateModal');
    }
}
