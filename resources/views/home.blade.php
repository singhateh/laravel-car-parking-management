@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Vechile In Today</h6>
                            <h2>{{ $total_vehicle_in }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-truck"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">6% higher than last month</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Vechile Out Today</h6>
                            <h2>{{ $total_vehicle_out }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-truck"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">61% higher than last month</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Total Vechiles</h6>
                            <h2>{{ $total_vehicles }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-truck"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">Total Vechiles</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Revenue</h6>
                            <h2>{{  $total_amount  }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-credit-card"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">Total Revenue</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">

        <div class="card-body">
            @include('vehicles.table')
        </div>
    </div>
</div>

@endsection
