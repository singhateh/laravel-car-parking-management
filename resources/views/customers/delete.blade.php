  <!-- Modal -->
  <div class="modal fade" id="delete{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{ $customer->name }} </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <form id="delete-data" action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-none">
                    @method('Delete')
                    @csrf
                    <label for="" class="text-center">Are you sure you want to delete this?</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Yes Delete</button>
        </div>
    </form>
      </div>
    </div>
  </div>
