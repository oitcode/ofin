<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\SalesbookEntry;

class SalesbookEntryList extends Component
{
    public $salesbookEntries;

    protected $listeners = [
        'addedSalesbookEntry' => 'render',
    ];

    public function render()
    {
        $this->salesbookEntries = SalesbookEntry::all();

        return view('livewire.salesbook-entry-list');
    }
}
