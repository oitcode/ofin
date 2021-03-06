<x-create-component componentId="productCategoryCreateModal">
  <x-slot name="createTitle">
    New Product Category
  </x-slot>

  <form>

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

  </form>

</x-create-component>
