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

      @if (true)
        <button class="btn btn-sm text-primary" wire:click="exitListMode">
          <i class="fas fa-power-off">
          </i>
        </button>
      @else
        <button class="btn btn-sm text-danger" wire:click="enterListMode">
          <i class="fas fa-ellipsis-h">
          </i>
        </button>
      @endif

      <a href="#" class="btn btn-tool btn-sm">
        <i class="fas fa-download"></i>
      </a>

      <a href="#" class="btn btn-tool btn-sm">
        <i class="fas fa-bars"></i>
      </a>
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
