<x-create-component componentId="productCreateModal">
  <x-slot name="createTitle">
    New Product
  </x-slot>

  <form>


    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              Category
            </div>
          </div>
          <select class="custom-select" wire:model="product_category_id">
            <option>---</option>
            @foreach($productCategories as $productCategory)
              <option value="{{ $productCategory->product_category_id }}">{{ $productCategory->name }}</option>
            @endforeach
          </select>
        </div>
    </div>


    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              <i class="fas fa-pencil-alt mr-3"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="" wire:model="name" placeholder="Title">
          @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              <i class="fas fa-warehouse mr-3"></i>
            </div>
          </div>
          <input type="text" class="form-control" wire:model="inventory_count" placeholder="In Stock Quantity">
          @error('inventory_count') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

    <div class="form-group form-inline m-0">
        <div class="input-group w-100">
          <div class="input-group-prepend w-25">
            <div class="input-group-text w-100">
              <i class="fas fa-dollar-sign mr-3"></i>
            </div>
          </div>
          <input type="text" class="form-control" wire:model="price" placeholder="Price">
          @error('price') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

  </form>

</x-create-component>
