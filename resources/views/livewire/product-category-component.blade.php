<x-crud-component>
  <x-slot name="title">
    Product Category
  </x-slot>

  @if ($createMode)
    @livewire('product-category-create')
  @endif

  @livewire('product-category-list')
</x-crud-component>
