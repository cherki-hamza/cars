@extends('master.app')

@section('my-styles')
    <style xmlns="http://www.w3.org/1999/html">
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
              <h1 class="text-success text-center">Welcome to Cars ads Research Engine</h1>
              @if(!Auth::user())
              <div class="alert alert-danger text-center">You have to register for full Administration</div>
                  <div class="container">
                      <div class="card">
                          <div class="card-header">
                              <marquee behavior="scroll" class="text-danger" direction="left">
                                  @foreach($marques as $marque)
                                      <span class="text-primary mr-5 ml-5"><i class="fa fa-magic mr-4"></i>{{$marque->marque_name}} <i style="color: aquamarine" class="fa fa-user-injured mr-4"></i></span>
                                  @endforeach
                              </marquee>
                          </div>
                          <div class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                  @foreach($cars as $key => $car)
                                      <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                          <img class="d-block w-100" src="{{'storage/'.$car->car_photo()}}" alt="dev">
                                          <div class="carousel-caption text-right d-none d-md-block">
                                              <h1 class="text-danger font-weight-bold">marque name :{{$car->marque->marque_name}}</h1>
                                              <h2 class="text-primary">Country :{{$car->country->country_name}}</h2>
                                              <h2 class="text-success">City :{{$car->region->region_name}}</h2>
                                              <h2 class="text-danger">Price :{{$car->car_price}}</h2>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
              @endif
          </div>
        <!-- start search car by country and marque -->
        @if(Auth::user())
        <div class="card mt-2">
            <div class="card-body col-md-12">

                <form action="{{route('result_car')}}"
                 method="POST">

                    @csrf
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group mr-4">
                                <label for="country"><span class="text-success">Car Country : </span></label>
                                <select class="form-control bg-warning" name="country" id="country">
                                    <option value="">Select Your country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group mr-4">
                                <label for="marque"><span class="text-success">Car Marque : </span></label>
                                <select class="form-control bg-warning" name="marque" id="marque">
                                    <option value="">Select Your Marque</option>
                                    @foreach($marques as $marque)
                                        <option value="{{$marque->id}}">{{$marque->marque_name}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="user_id" value="{{(Auth::user())?Auth::user()->id:''}}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group align-content-center mt-4 text-right">
                                <input type="submit" class="btn btn-primary btn-lg" value="Search Car By Country and City">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        @endif
        <!-- end search car by country and marque -->

        <!-- start the search -->
        @if(Auth::user())
        <div class="card mt-2">
            <div class="card-body col-md-12">
                    <div class="row"><!-- start row div -->
                        <!-- start search by country -->
                          <div class="col-6">
                              <form action="{{route('result_car_by_country')}}"
                                    method="POST">

                                  @csrf
                                  <div class="row">

                                      <div class="col-md-5">
                                          <div class="form-group">
                                              <label for="the_country"><span class="text-success">Car Country : </span></label>
                                              <select class="form-control bg-warning" name="the_country" id="the_country">
                                                  <option value="">Select Your country</option>
                                                  @foreach($countries as $country)
                                                      <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                  @endforeach
                                              </select>
                                              <input type="hidden" name="user_id" value="{{(Auth::user())?Auth::user()->id:''}}">
                                          </div>
                                      </div>

                                      <div class="col-md-4">
                                          <div class="form-group align-content-center mt-4 text-right">
                                              <input type="submit" class="btn btn-success btn-lg" value="Search Car By Country">
                                          </div>
                                      </div>

                                  </div>
                              </form>
                          </div>
                        <!-- end search by country -->

                        <!-- ---------------------- -->

                        <!-- start search by City -->
                        <div class="col-6">
                            <form action="{{route('result_car_by_marque')}}"
                                  method="POST">

                                @csrf
                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="the_marque"><span class="text-success">Car Marque : </span></label>
                                            <select class="form-control bg-warning" name="the_marque" id="the_marque">
                                                <option value="">Select Your Marque</option>
                                                @foreach($marques as $marque)
                                                    <option value="{{$marque->id}}">{{$marque->marque_name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="user_id" value="{{(Auth::user())?Auth::user()->id:''}}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group align-content-center mt-4 text-right">
                                            <input type="submit" class="btn btn-success btn-lg" value="Search Car By Marque">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- end search by City -->

                    </div><!-- end row div -->
            </div>
        </div>
        @endif
        <!-- end the search  -->

        <!-- start card 3 -->
            @if(Auth::user())
        <div class="card col-md-12 mt-2">
           <div class="row">
               <div class="col-md-{{(Auth::user()? '8':'12')}}">
                   <div class="card-header">
                       <div class="align-content-center">
                       @if(Auth::user())
                               <hr>
                               <!-- start slider -->
                               {{-- {{$cars}} --}}

                               <div class="carousel slide" data-ride="carousel">
                                   <div class="carousel-inner">
                                       @foreach($cars as $key => $car)
                                           <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                               <img class="d-block w-100" src="{{'storage/'.$car->car_photo()}}" alt="dev">
                                               <div class="carousel-caption text-right d-none d-md-block">
                                                   <h1 class="text-danger font-weight-bold">marque name :{{$car->marque->marque_name}}</h1>
                                                   <h2 class="text-primary">Country :{{$car->country->country_name}}</h2>
                                                   <h2 class="text-success">City :{{$car->region->region_name}}</h2>
                                                   <h2 class="text-danger">Price :{{$car->car_price}}</h2>
                                               </div>
                                           </div>
                                       @endforeach
                                   </div>
                               </div>

                               <!-- end slider -->
                           @else
                               <div class="card-body">
                                   research ... :)
                               </div>
                           @endif
                       </div>
                   </div>
               </div>
               @if(Auth::user())
               <div class="col-md-4 mt-5">
                   <!-- start card region -->
                   <div class="card">
                       <div class="card-header">
                           <h2 class="text-primary">Car By Region :</h2>
                       </div>
                       <div class="card-body">
                           <form action="{{route('cat_car_by_city_page',['city'=>1,'user_id'=>Auth::user()->id])}}" method="POST">
                               @csrf
                           @foreach($regions as $region)
                               <a href="{{route('cat_car_by_city_page',['city'=>$region->id])}}"><span class="badge badge-pill badge-success text-dark">{{$region->region_name}}</span></a>
                                   <input type="hidden" name="the_city" value="{{$region->id}}">
                           @endforeach
                           </form>
                       </div>
                   </div>
                   <!-- end card region -->

                   <!-- end card country -->
                   <div class="card">
                       <div class="card-header">
                           <h2 class="text-primary">Car By Country :</h2>
                       </div>
                       <div class="card-body">
                           <form action="{{route('cat_car_by_country_page',['country'=>$country->id , 'user_id'=>Auth::user()->id])}}" method="POST">
                               @csrf
                               @foreach($countries as $country)
                                   <span class="badge badge-pill badge-success text-dark"><a href="{{route('cat_car_by_country_page' , ['country'=>$country->id])}}" name="the_country">{{$country->country_name}}</a></span>
                                   <input type="hidden" name="the_country" value="{{$country->id}}">
                               @endforeach
                          </form>
                       </div>
                   </div>
                   <!-- end card country -->
               </div>
               @endif
           </div>

       </div>
           @endif
        <!-- end card 3 -->

    </div>


@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

            $('.carousel').carousel({
                interval: 3000
            })
            console.log('welcome to todo page :)');

        });

    </script>
@endsection

