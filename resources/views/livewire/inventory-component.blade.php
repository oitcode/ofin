<x-crud-component>
  <x-slot name="title">
    Inventory
  </x-slot>

  <div class="table-responsive">
    <table class="table">
      <tbody>
        @foreach ($products as $product)
          @if (strtolower($product->productCategory->name) !== 'service')
            <tr>
              <td>
                {{ $product->name }}
              </td>
              <td>
                {{ $product->quantity }}
              </td>
            </tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </div>
</x-crud-component>
