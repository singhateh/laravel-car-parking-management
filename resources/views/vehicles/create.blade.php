@extends('layouts.app')
@section('content')
@include('flash')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Create Vehicle </h3></div>
            <div class="card-body">
              @include('vehicles.fields')
            </div>
        </div>
    </div>

</div>
@endsection
