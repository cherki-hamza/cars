@extends('master.app')

@section('my-styles')
    <style>
        h1{
            color:gold;
        }
        .bg-hamza{
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        }
    </style>
@endsection

@section('title' , 'Home Site')

@section('content')

    <div class="container">

        <div class="card-header mt-2">
            <h1 class="text-success text-center">Results search for car by Marque - Country  </h1>
        </div>
        <!-- start category -->
        <div class="card mt-2">
            <div class="card-body col-md-12">
                <div class="row">
                 @foreach($cars as $car)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$car->car_photo}}" class="card-img-top" alt="...">
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
                    @endforeach
                </div>
            </div>
        </div>

        <!-- end category -->


    </div>


@endsection

@section('scripts')

@endsection

