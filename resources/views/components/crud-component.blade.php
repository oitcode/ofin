<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      {{ $title }}
    </h3>
    <div class="card-tools">
      <button class="btn btn-sm btn-outline-success px-3" wire:click="create">
        <i class="fas fa-plus"></i>
      </button>

      {{-- TODO: Why is this needed --}}
      {{ $foobar ?? '' }}

      <span class="">
          <input type="text" wire:model.defer="" wire:keydown.enter="" class="">
          <button class="btn btn-sm text-success text-bold" wire:click="">
            Go
          </button>
      </span>
    </div>
  </div>
  <div class="card-body p-0">
    {{ $slot }}
  </div>
</div>
