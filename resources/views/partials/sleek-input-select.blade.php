<div class="form-group form-inline m-0">
  <div class="input-group w-100">
    <div class="input-group-prepend w-25">
      <div class="input-group-text w-100">
        {{ $selectTitle }}
      </div>
    </div>

    <select class="custom-select" wire:model.defer="{{ $mName }}">
      <option>---</option>
       @if ($selectItemType === 'model')
         @foreach($items as $item)
           <option value="{{ $item->getKey() }}">{{ $item->name }}</option>
         @endforeach
       @else
         @foreach($items as $item)
           <option>{{ $item }}</option>
         @endforeach
       @endif
    </select>
    @error('{{ $mName }}')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
</div>
