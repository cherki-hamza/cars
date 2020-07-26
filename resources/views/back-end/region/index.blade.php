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
                <h2 class="text-primary">All Cities</h2>
                <div class="card">
                    <div class="card-body">

                        <table class="table box table-bordered table-responsive">
                            <thead>
                            <tr class="text-primary">
                                <th>Id</th>
                                <th>City Name</th>
                                <th class="bg-success">Country_Name</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($regions as $region)
                                <tr class="text-dark">
                                    <td>{{$region->id}}</td>
                                    <td>{{$region->region_name}}</td>
                                    <td class=" bg-info">{{$region->country->country_name}}</td>
                                    <td>{{$region->created_at}}</td>
                                    <td>{{$region->updated_at}}</td>
                                    <td>
                                        <div class="row">
                                            <span><a class="btn btn-success" href="{{route('region.edit' , ['region'=>$region->id])}}">Edit</a></span>
                                            <span><a class="btn btn-primary" href="">Update</a></span>
                                            <span><a class="btn btn-danger" href="">Delete</a></span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- end section -->

@endsection




{{--                          {{$countries->cities}}--}}
{{--                        <hr>--}}
{{--                          {{$cities->country}}--}}
