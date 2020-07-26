@extends('back-end.master.admin-app')

@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="container my-5">
                <div class="col-md-6  justify-content-center">
                    <div class="card  text-center my-5">
                        <div class="card-header">
                            <h1 class="text-primary">Add new Marque Car</h1>
                            @if($msg = session()->get('success'))
                                <h2 class="alert alert-success">{{$msg}}</h2>
                            @endif
                        </div>

                        <div class="card-body">
                            <form action="{{route('marque.store')}}" method="POST">
                                @csrf
                                <div class="row form-group text-left">
                                    <label for="marque"><span class="text-success">Marque Name :</span></label>
                                    <input type="text" class="@error('marque') is-invalid @enderror form-control" name="marque" id="marque" placeholder="Write your Marque">
                                    @error('marque')
                                     <div class="alert alert-danger mt-2">
                                        {{$message}}
                                     </div>
                                    @enderror
                                </div>

                                <div class="row form-group my-5">
                                    <input type="submit" class="btn btn-primary"  value="Save New Marque">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
