<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Product;
use App\SalesbookEntry;
use App\SalesbookEntryItem;

class SalesbookEntryCreate extends Component
{
    public $datetime;
    public $buyer_name;
    public $product_id;
    public $price;
    public $quantity;
    public $amount;
    public $comment;

    public $products = null;

    public function render()
    {
        $this->products = Product::all(); 

        return view('livewire.salesbook-entry-create');
    }

    public function store()
    {
        /* Validate data */
        $validatedData = $this->validate([
            'buyer_name' => 'required|string',
            'amount' => 'required|integer',
            'comment' => 'nullable|string',
        ]);

        $validatedData['datetime'] = date('Y-m-d H:i:s');

        $salesbookEntry= SalesbookEntry::create($validatedData);

        $this->emit('addedSalesbookEntry');
        $this->emit('toggle_createSalesbookEntryModal');
    }

    public function setPrice()
    {
        $product = Product::find($this->product_id);

        $this->price =  $product->price;

        if ($this->quantity) {
            $this->amount = $this->price * $this->quantity;
        }

    }

    public function setAmount()
    {
        if ($this->price) {
            $this->amount = $this->price * $this->quantity;
        }
    }
}
