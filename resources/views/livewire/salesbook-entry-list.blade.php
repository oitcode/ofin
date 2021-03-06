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
    @foreach($salesbookEntries as $salesbookEntry)
    <tr>
      <td>
        {{ $salesbookEntry->datetime}}
      </td>

      <td>
        {{ $salesbookEntry->buyer_name}}
      </td>
      <td>
        {{ $salesbookEntry->amount}}
      </td>
      <td>
        @if (strtolower($salesbookEntry->payment_status) === 'pending')
          <span class="badge badge-pill badge-danger">
            Credit
          <span>
        @else
          <span class="badge badge-pill badge-success">
            Cash
          <span>
        @endif
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
