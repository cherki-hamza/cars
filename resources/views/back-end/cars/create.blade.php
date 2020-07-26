@extends('back-end.master.admin-app')

@section('content')

<div class="content-wrapper">
    <section class="content">

        <div class="container">
            <div class="col-md-6 justify-content-center">
                <div class="card text-center my-5">
                    <div class="card-header">
                        <h2></h2>
                        <h1 class="text-primary">Add new Ads Car </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group text-left">
                                <label for="price"><span class="text-success">Ads Car price :</span></label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Write your car price">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="row form-group text-left">
                                <label for="photo"><span class="text-success">Ads Car Photo : </span></label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo">
                                @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="row form-group text-left">
                                <label for="distance"><span class="text-success">Ads Car distance :</span></label>
                                <input type="text" class="form-control @error('distance') is-invalid @enderror" name="distance" id="distance" placeholder="Write your car distance">
                                @error('distance')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="row form-group text-left">
                                <label for="date"><span class="text-success">Ads Car date construction :</span></label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date" placeholder="Write your date construction for car">
                                @error('date')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group text-left">
                                <label for="marque"><span class="text-success">Chose your Marque :</span></label>
                                <select class="form-control @error('marque_id') is-invalid @enderror" name="marque_id" id="marque">
                                    <option value=""></option>
                                    @foreach($marques as $marque)
                                    <option value="{{$marque->id}}">{{$marque->marque_name}}</option>
                                    @endforeach
                                </select>
                                @error('marque_id')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group text-left">
                                <label for="country"><span class="text-success">Chose your Country :</span></label>
                                <select class="form-control @error('country_id') is-invalid @enderror" name="country_id" id="country">

                                    @foreach($countries as $country)
                                        <option value=""></option>
                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group text-left">
                                <label for="region"><span class="text-success">Chose your City :</span></label>
                                <select class="form-control @error('region_id') is-invalid @enderror" name="region_id" id="region">
                                    <option value=""></option>
                                    @foreach($regions as $region)
                                        <option value="{{$region->id}}">{{$region->region_name}}</option>
                                    @endforeach
                                </select>
                                @error('region_id')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>



                            <div class="row form-group my-5">
                                <input type="submit" class="btn btn-primary" name="save_ads" value="Save New Ads Car">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

@endsection
