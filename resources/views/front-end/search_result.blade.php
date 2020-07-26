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
            <h1 class="text-success text-center">Results search for car</h1>
        </div>
        <!-- start category -->
        <div class="card mt-2">
            <div class="card-body col-md-12">
                <div class="row">
                    @if($search_by_marque->count() > 0)
                       {{$search_by_marque}}
                    @elseif($search_by_country->count() > 0)
                        {{$search_by_country}}
                    @elseif($search_by_city->count() > 0)
                        {{$search_by_city}}
                    @endif
                </div>
            </div>
        </div>

        <!-- end category -->


    </div>


@endsection

@section('scripts')

@endsection

