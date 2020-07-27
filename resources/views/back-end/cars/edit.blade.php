@extends('back-end.master.admin-app')

@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="container">
                <div class="col-md-6 justify-content-center">
                    <div class="card text-center my-5">
                        <div class="card-header">
                            @if($msg = session()->get('success'))
                                <h2 class="alert alert-success">{{$msg}}</h2>
                            @endif
                            <h1 class="text-primary">Edit Ads Car</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('cars.update',$car->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row form-group text-left">
                                    <label for="price"><span class="text-success">Ads Car price :</span></label>
                                    <input type="text" class="form-control" id="price" name="price" value="{{$car->car_price}}">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                </div>

                                <div class="row form-group text-left">
                                    <label for="photo"><span class="text-success">Ads Car Photo : </span></label>
                                    <input type="file" class="form-control" name="photo" id="photo">
                                    <br>

{{--                                    <img style="width: 250px;height: 70px;" class="img-fluid"  src="{{$car->car_photo}}" alt="{{$car->marque->marque_name}}">--}}
                                    <img style="width: 250px;height: 70px;" class="img-fluid"  src="{{$car->car_photo}}" alt="{{$car->marque->marque_name}}">

                                </div>

                                <div class="row form-group text-left">
                                    <label for="distance"><span class="text-success">Ads Car Distance :</span></label>
                                    <input type="text" class="form-control" name="distance" id="distance" value="{{$car->car_distance}}">
                                </div>

                                <div class="row form-group text-left">
                                    <label for="date"><span class="text-success">Ads Car date construction :</span></label>
                                    <input type="date" class="form-control" name="date" id="date" value="{{$car->car_date_construction}}">
                                </div>

                                <div class="form-group text-left">
                                    <label for="marque"><span class="text-success">Chose your Marque :</span></label>
                                    <select class="form-control" name="marque_id" id="marque">
                                        <option value="{{$car->marque_id}}">{{$car->marque->marque_name}}</option>
                                        @foreach($marques as $marque)
                                            <option value="{{$marque->id}}">{{$marque->marque_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group text-left">
                                    <label for="country"><span class="text-success">Chose your Country :</span></label>
                                    <select class="form-control" name="country_id" id="country">
                                        <option value="{{$car->country_id}}">{{$car->country->country_name}}</option>
                                        <hr style="height: 2px; border: solid 2px #0d6aad;">
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group text-left">
                                    <label for="region"><span class="text-success">Chose your City :</span></label>
                                    <select class="form-control" name="region_id" id="region">
                                        <option value="{{$car->city_id}}">{{$car->region->region_name}}</option>
                                        @foreach($regions as $region)
                                            <option value="{{$region->id}}">{{$region->region_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row form-group my-5">
                                    <input type="submit" class="btn btn-primary" name="update_ads" value="Update Ads Car">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
