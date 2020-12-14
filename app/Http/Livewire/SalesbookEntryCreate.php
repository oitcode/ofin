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

    public $count = 0;
    public $items = array();

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
            'items.*.product_id' => 'required|exists:product',
            'items.*.price' => 'required|integer',
            'items.*.quantity' => 'required|integer',
            'items.*.amount' => 'required|integer',
            'amount' => 'required|integer',
            'comment' => 'nullable|string',
        ]);

        $validatedData['datetime'] = date('Y-m-d H:i:s');

        $salesbookEntry= SalesbookEntry::create($validatedData);

        foreach ($this->items as $item) {
            $temp = $item;

            $temp['salesbook_entry_id'] = $salesbookEntry->salesbook_entry_id;
            $salesbookEntryItem = SalesbookEntryItem::create($temp);
        }

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

    public function add()
    {
        $this->count++;
    }

    public function remove()
    {
        $this->count--;
    }

    public function updateItemPrice($index)
    {
        $product = Product::findOrFail($this->items[$index]['product_id']);

        $this->items[$index]['price'] = $product->price;
    }

    public function setItemTotal($index)
    {
        if (isset($this->items[$index]['price']) && isset($this->items[$index]['price'])) {
            $this->items[$index]['amount'] = 
                $this->items[$index]['price']
                *
                $this->items[$index]['quantity']; 

                $this->setTotal();
        }

    }

    public function setTotal()
    {
         $this->amount = 0;

         for ($i=0; $i < $this->count; $i++) {
             if (isset($this->items[$i]['price']) && isset($this->items[$i]['price'])) {
                 $this->amount += $this->items[$i]['amount'];
             }
         }
    }
}
