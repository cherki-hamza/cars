@extends('back-end.master.admin-app')

@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="container">
                <div class="col-md-6 justify-content-center">
                    <div class="card text-center my-5">
                        @if($msg = session()->get('success'))
                            <div class="alert alert-success">{{$msg}}</div>
                        @endif
                        <div class="card-header">
                            <h1 class="text-primary">Edit Country</h1>
                        </div>
                        <div class="card-body">

                            <form action="{{route('country.update' , $country->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row form-group text-left">
                                    <label for="country"><span class="text-success">Country Name</span></label>
                                    <input type="text" class="@error('country') is-invalid @enderror form-control" name="country" id="country" value="{{$country->country_name}}">
                                    @error('country')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="row form-group my-5">
                                    <input type="submit" class="btn btn-primary" name="update_country" value="Update Country">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
