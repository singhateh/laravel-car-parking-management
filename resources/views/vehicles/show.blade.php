  <!-- Modal -->
  <div class="modal fade" id="show{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">{{ $vehicle->name }} - {{ $vehicle->plat_number }} Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <ul class="list-group list-group-flush">

                        <div class="row">
                            <div class="col-md-4">
                        <li class="list-group-item">Duration</li>
                    </div>
                    <div class="col-md-8">
                        <li class="list-group-item text-right"><strong>{{ $vehicle->duration }} Days</strong></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        <li class="list-group-item">Per Day Charge</li>
                    </div>
                    <div class="col-md-8">
                        <li class="list-group-item text-right"><strong>GMD {{ $vehicle->packing_charge }} </strong></li>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-4">
                            <li class="list-group-item">Total Amount</li>
                        </div>
                        <div class="col-md-8">
                            <li class="list-group-item text-right"><strong> GMD {{ $vehicle->duration *  $vehicle->packing_charge }}</strong></li>
                        </div>
                        </div>

                </ul>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
