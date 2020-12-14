<x-list-component>
  @if (false)
  <thead>
    <tr>
      <th>Name</th>
      <th>Amount</th>
      <th>Action</th>
    </tr>
  </thead>
  @endif
  
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>
        <a href="" wire:click.prevent="" class="text-dark">
          {{ $product->name }}
        </a>
      </td>
      <td>
        {{ $product->price }}
      </td>
      <td>
        <span class="btn btn-tool btn-sm" wire:click="">
          <i class="fas fa-pencil-alt mr-2 text-primary"></i>
        </span>
        <span class="btn btn-tool btn-sm">
          <i class="fas fa-trash mr-2 text-danger" wire:click=""></i>
        </span>
      </td>
    </tr>
    @endforeach
  </tbody>
</x-list-component>
