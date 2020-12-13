<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SalesbookEntryComponent extends GeneralComponent
{
    public function render()
    {
        return view('livewire.salesbook-entry-component');
    }

    protected $listeners = [
        'destroy_createSalesbookEntryModal' => 'exitCreateMode',
    ];
}
