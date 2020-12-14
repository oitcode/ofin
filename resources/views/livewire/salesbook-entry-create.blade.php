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

    @if (false)
    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              Product
            </div>
          </div>
          <select class="custom-select" wire:model="product_id" wire:change="setPrice">
            <option>---</option>
            @foreach($products as $product)
              <option value="{{ $product->product_id }}">{{ $product->name }}</option>
            @endforeach
          </select>
        </div>
    </div>
    @endif


    <div class="my-3">
      <span class="btn btn-sm">
        <i class="fas fa-plus mr-3">
        </i>
        ADD PRODUCT
      </span>
    </div>

    @if (false)
    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              <i class="fas fa-caret-right mr-3"></i>
            </div>
          </div>
          <input type="text" class="form-control" wire:model="price" wire:change="setAmount" placeholder="Price">
          @error('price') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              <i class="fas fa-times mr-3"></i>
            </div>
          </div>
          <input type="text" class="form-control" wire:model="quantity" wire:change="setAmount" placeholder="Quantity">
          @error('quantity') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    @endif

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

  </form>

</x-create-component>
