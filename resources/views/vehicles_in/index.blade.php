@extends('layouts.app')
@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-10">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Vehicles In List</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <a class="btn btn-theme" href="{{ route('vehiclesIn.create') }}"> Add New Vehicle In</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Current In Vehicles</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Vehicles History</a>
                    </li>

                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                       @if ($vehiclesIn)
                       @include('vehicles_in.table')
                       @endif
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @if ($vehiclesIn_History)
                       @include('vehicles_in.table_history')
                       @endif
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection
