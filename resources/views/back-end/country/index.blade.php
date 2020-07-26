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
                   <div>
                       @if($msg = session()->get('success'))
                           <h2>{!!$msg !!}</h2>
                       @endif
                   </div>
                <!-- Your Page Content Here -->
                <h2 class="text-primary">All Country</h2>
                <div class="card">
                    <div class="card-body">

                        <table class="table box table-bordered">
                            <thead>
                            <tr class="text-primary">
                                <th>Id</th>
                                <th>Country Name</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $country)
                                <tr class="text-dark">
                                    <td>{{$country->id}}</td>
                                    <td>{{$country->country_name}}</td>
                                    <td>{{$country->created_at}}</td>
                                    <td>{{$country->updated_at}}</td>
                                    <td>
                                        <div class="row">
                                            <span><a class="btn btn-success" href="{{route('country.edit' , ['country'=>$country->id])}}">Edit</a></span>
                                            <span><a class="btn btn-primary" href="{{route('country.update' , ['country'=>$country->id])}}">Show</a></span>
                                            <span>
                                                <form action="{{route('country.destroy' , ['country'=>$country->id])}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button  class="btn btn-danger">Delete</button>
                                                </form>
                                            </span>
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
