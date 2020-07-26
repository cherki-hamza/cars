
@extends('back-end.master.admin-app')

@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="container">
                <div class="col-md-6 justify-content-center">
                    <div class="card text-center my-5">
                        <div class="card-header">
                            <h2>
                                @if($msg = session()->get('success'))
                                    <h2 class="alert alert-success">{{$msg}}</h2>
                                @endif
                            </h2>
                            <h1 class="text-primary">Edit Marque</h1>
                        </div>
                        <div class="card-body">

                            <form action="{{route('marque.update' , $marque->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row form-group text-left">
                                    <label for="marque_name"><span class="text-success">Marque Name</span></label>
                                    <input type="text" class="form-control" name="marque_name" id="marque_name" value="{{$marque->marque_name}}">
                                </div>

                                <div class="row form-group my-5">
                                    <input type="submit" class="btn btn-primary" name="save_marque" value="Update Marque">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection

