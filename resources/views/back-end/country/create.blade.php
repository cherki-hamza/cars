@extends('back-end.master.admin-app')

@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="container">
                <div class="col-md-6 justify-content-center">
                    <div class="card text-center my-5">
                        <div class="card-header">

                            <h1 class="text-primary">Add new Country</h1>
                            @if($msg = session()->get('success'))
                                <h2 class="alert alert-success">{{$msg}}</h2>
                            @endif
                        </div>
                        <div class="card-body">
                            <form action="{{route('country.store')}}" method="post">
                                @csrf
                                <div class="row form-group text-left">
                                    <label for="country"><span class="text-success">Country Name</span></label>
                                    <input type="text" class="@error('country') is-invalid @enderror form-control" name="country" id="country" placeholder="Write your country">
                                    @error('country')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="row form-group my-5">
                                    <input type="submit" class="btn btn-primary" name="save_country" value="Save New Country">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
