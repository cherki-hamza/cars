@extends('back-end.master.admin-app')

@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="container">
                <div class="col-md-6 justify-content-center">
                    <div class="card text-center my-5">
                        <div class="card-header">

                            <h1 class="text-primary">Edit Cities</h1>
                            @if($msg = session()->get('success'))
                                <h2 class="alert alert-success">{{$msg}}</h2>
                            @endif
                        </div>
                        <div class="card-body">

                            <form action="{{route('region.update' , $region->id)}}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="row form-group text-left">
                                    <div class="col-md-6">

                                        <div class="form-group ml-5">
                                            <label for="country"><span class="text-danger font-weight-bold">Chose Country First : </span></label>
                                            <select class="form-control bg-warning" name="country" id="country">
                                                    <option value="{{$region->country_id}}">{{$region->country->country_name}}</option>
                                                    @foreach($countries as $country)
                                                     <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6 form-group text-left">
                                        <label for="region"><span class="text-success">Region Name</span></label>
                                        <input type="text" class="@error('region') is-invalid @enderror form-control" name="region" id="region" value="{{$region->region_name}}">
                                        @error('region')
                                        <div class="alert alert-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>



                                </div>
                                <div class="form-group my-5">
                                    <input type="submit" class="btn btn-primary" name="update_region" value="Update Region">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
