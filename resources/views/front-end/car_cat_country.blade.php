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
            <h1 class="text-success text-center">Category Cars by country </h1>
        </div>
        <!-- start category -->
        <div class="card mt-2">
            <div class="card-body col-md-12">
                {{ $car_by_country}}
            </div>
        </div>

        <!-- end category -->


    </div>


@endsection

@section('scripts')

@endsection

