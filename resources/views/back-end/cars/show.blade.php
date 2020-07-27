@extends('back-end.master.admin-app')

@section('title' , 'Admin Dashboard')

@section('content')

    <!-- start section -->
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Page Header
                    <small>Optional description</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Your Page Content Here -->
                @if($msg = session()->get('success'))
                    <h2 class="alert alert-success">{{$msg}}</h2>
                @endif

                <h2 class="text-primary">Show the Car Info </h2>
                <div class="card box align-content-center">
                    <div class="card-body">
                        <div class="row text-center">

                            <div class="col-md-8 align-content-center">
                                <div class="card">

{{--                                    <img src="/storage/{{$car->car_photo}}" style="max-width: 600px;max-height: 400px;" class="card-img-top" alt="...">--}}
                                    <img src="{{$car->car_photo}}" style="max-width: 600px;max-height: 400px;" class="card-img-top" alt="...">

                                    <div class="card-body">
                                        <h5 class="card-title">Car Name: <span class="text-success font-weight-bold">{{$car->marque->marque_name}}</span></h5>
                                        <p class="card-text">car Price: {{$car->car_price}}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Car Distance: {{$car->car_distance}}</li>
                                        <li class="list-group-item">Date Construction : {{$car->car_date_construction}}</li>
                                        <li class="list-group-item">Car Country: <span class="text-success font-weight-bold">{{$car->country->country_name}}</span></li>
                                        <li class="list-group-item">Car City: {{$car->region->region_name}}</li>
                                        <li class="list-group-item">User Name: <span class="text-danger">{{$car->user->name}}</span></li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link"></a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- end section -->

@endsection
