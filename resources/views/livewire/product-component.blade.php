<x-crud-component>
  <x-slot name="title">
    Product
  </x-slot>

  <x-slot name="foobar">
    <button class="btn btn-sm btn-outline-success px-3" wire:click="createProductCategory">
      <i class="fas fa-folder-plus"></i>
    </button>
  </x-slot>



  @if ($createMode)
    @livewire('product-create')
  @endif

  @if ($createProductCategoryMode)
    @livewire('product-category-create')
  @endif

  @livewire('product-list')
</x-crud-component>
