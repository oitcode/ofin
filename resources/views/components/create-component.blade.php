<div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="{{ $componentId }}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ $createTitle }}</h5>
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div class="modal-body p-0">
        {{ $slot }}

        {{-- TODO: Make this controllable --}} 
        <div class="form-group form-inline m-0">
            <div class="input-group w-100">
              <div class="input-group-prepend w-25">
                <div class="input-group-text w-100">
                  <i class="fas fa-comment mr-3"></i>
                </div>
              </div>
              <input type="text" class="form-control" wire:model="comment" placeholder="Comment">
              @error('comment') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="mx-2 my-4">
          <button wire:click="store" class="btn btn-sm btn-success mr-3">Save</button>
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
        </div>


      </div>
    </div>
  </div>
</div>

<script>
    /* Show the modal on load */
    $(document).ready(function () {
       $("#{{ $componentId }}").modal('show');
    });

    /* Toggle the modal.  */
    window.livewire.on("toggle_{{ $componentId }}", () => {
        console.log('Hiding foo');
        $("#{{ $componentId }}").modal('hide');
    });


   /* Destroy the modal on hide */
   $("#{{ $componentId }}").on('hidden.bs.modal', function () {
       window.livewire.emit("destroy_{{ $componentId }}");
   });
</script>
