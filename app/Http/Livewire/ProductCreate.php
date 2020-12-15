<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Product;
use App\ProductCategory;
use App\InventoryEntry;

class ProductCreate extends Component
{
    public $product_category_id;
    public $name;
    public $price;
    public $inventory_count;
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
            'comment' => 'nullable|string',
            'inventory_count' => 'nullable|integer|gte:1'
        ]);
        $validatedData['quantity'] = $this->inventory_count;

        $product= Product::create($validatedData);

        /* Create Inventory record if needed. */
        $temp['product_id'] = $product->product_id;
        $temp['count'] = $this->inventory_count;
        $temp['direction'] = 'in';
        $inventoryEntry = InventoryEntry::create($temp);

        $this->emit('productAdded');
        $this->emit('toggle_productCreateModal');
    }
}
