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
                    <h2>{!! $msg  !!}</h2>
                @endif
                <div class="text-right"><a href="{{route('cars.create')}}" class="btn btn-bitbucket ml-5 mt-5">Add New Car Ads</a></div>
                <h2 class="text-primary">All Cars Info </h2>
                 <div class="card">
                     <div class="card-body">
                         <div class="box">
                             <table class="table table-bordered table-responsive text-primary">
                                 <thead>
                                 <tr class="text-danger">
                                     <th>Car Id</th>
                                     <th>Car Image</th>
                                     <th>Car User Name</th>
                                     <th>Car Name</th>
                                     <th>Car Price</th>
                                     <th>Car Distance</th>
                                     <th>Car City name</th>
                                     <th>Car Country</th>
                                     <th>Car Construction date</th>
                                     <th>Created_At</th>
                                     <th>UpdatedAt</th>
                                     <th>Actions</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 @foreach($cars as $car)
                                     <tr>
                                         <td>{{$car->id}}</td>
                                         <td><img style="width: 150px;height: 70px;" class="img-fluid" src="{{asset('storage/'.$car->car_photo)}}" alt="{{$car->marque->marque_name}}"></td>
                                         <td>{{$car->user->name}}</td>
                                         <td>{{$car->marque->marque_name}}</td>
                                         <td>{{$car->car_price}}</td>
                                         <td>{{$car->car_distance}} <span class="text-success font-weight-bold"> / Km</span></td>
                                         <td>{{$car->region->region_name}}</td>
                                         <td>{{$car->country->country_name}}</td>
                                         <td>{{$car->car_date_construction}}</td>
                                         <td>{{$car->created_at}}</td>
                                         <td>{{$car->updated_at}}</td>
                                         <td>
                                             <div class="row">
                                                 <a href="{{route('cars.edit' , $car->id)}}"><span class="btn btn-primary">Edit</span></a>
                                                 <a href="{{route('cars.show' , $car->id)}}"><span class="btn btn-success">Show</span></a>
                                                 <form action="{{route('cars.destroy' , $car->id)}}" method="POST">
                                                         @csrf
                                                         @method('delete')
                                                     <input type="submit"  class="btn btn-danger" value="Delete">
                                                 </form>
                                             </div>
                                         </td>
                                     </tr>
                                 @endforeach
                                 </tbody>

                             </table>
                         </div>
                    </div>
                 </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- end section -->

@endsection
