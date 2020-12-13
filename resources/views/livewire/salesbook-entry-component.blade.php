<x-crud-component>
  <x-slot name="title">
    Salesbook Entry
  </x-slot>

  <x-slot name="foobar">
    <button class="btn btn-sm btn-outline-success px-3" wire:click="">
      <i class="fas fa-folder-plus"></i>
    </button>
  </x-slot>



  @if ($createMode)
    @livewire('salesbook-entry-create')
  @endif

  @livewire('salesbook-entry-list')
</x-crud-component>
