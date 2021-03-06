<x-create-component componentId="createSalesbookEntryModal">
  <x-slot name="createTitle">
    New Salesbook Entry
  </x-slot>

  <form>

    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              <i class="fas fa-caret-right mr-3"></i>
            </div>
          </div>
          <input type="text" class="form-control" wire:model="buyer_name" placeholder="Buyer Name">
          @error('buyer_name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>



    <div class="my-3">
      <span class="btn btn-sm" wire:click="add">
        <i class="fas fa-plus mr-3">
        </i>
        ADD PRODUCT
      </span>
    </div>

    @for ($i=0; $i < $count; $i++)
      <div class="border-bottom">
        <div class="float-left">
          {{ $i + 1 }}
        </div>
        <div class="form-group form-inline m-0">
              <select class="custom-select w-25 border-0" wire:model="items.{{ $i }}.product_id" wire:change="updateItemPrice({{ $i }})">
                <option>---</option>
                @foreach($products as $product)
                  <option value="{{ $product->product_id }}">{{ $product->name }}</option>
                @endforeach
              </select>

              <input type="text" class="form-control w-25" wire:model="items.{{ $i }}.price" wire:change="" placeholder="Price">

              <input type="text" class="form-control w-25" wire:model="items.{{ $i }}.quantity" wire:keydown.tab.prevent="setItemTotal({{ $i }})"
              wire:keydown.enter.prevent="setItemTotal({{ $i }})" wire:change="" placeholder="Quantity">
              <input type="text" class="form-control w-25" wire:model="items.{{ $i }}.amount" wire:change="" placeholder="Item Total" readonly>
        </div>
      </div>
    @endfor



    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              <i class="fas fa-dollar-sign mr-3"></i>
            </div>
          </div>
          <input type="text" class="form-control" wire:model="amount" placeholder="Amount">
          @error('amount') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

    @php
      $selectData = [
        'selectTitle' => 'Credit',
        'mName' => 'creditFlag',
        'selectItemType' => 'normal', 
        'items' => [
            'Yes',
            'No',
        ],
      ];
    @endphp
    @include ('partials.sleek-input-select', $selectData)

  </form>

</x-create-component>
