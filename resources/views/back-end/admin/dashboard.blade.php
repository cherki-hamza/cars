@extends('back-end.master.admin-app')

@section('title' , 'All Users')

@section('content')

    <!-- start section -->
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Page Header
                    <small>Optional description</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Your Page Content Here -->
                @if(auth()->user()->isAdmin())
                    <h2 class="text-primary">Dashboard</h2>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Users</span>
                                    <span class="info-box-number">{{$count_users}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Cars</span>
                                    <span class="info-box-number">{{$count_cars}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Marques</span>
                                    <span class="info-box-number">{{$count_marque}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Countries</span>
                                    <span class="info-box-number">{{$count_cities}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- =========================================================== -->

{{--                    <div class="row">--}}
{{--                        <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="info-box bg-aqua">--}}
{{--                                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>--}}

{{--                                <div class="info-box-content">--}}
{{--                                    <span class="info-box-text">Bookmarks</span>--}}
{{--                                    <span class="info-box-number">41,410</span>--}}

{{--                                    <div class="progress">--}}
{{--                                        <div class="progress-bar" style="width: 70%"></div>--}}
{{--                                    </div>--}}
{{--                                    <span class="progress-description">--}}
{{--                    70% Increase in 30 Days--}}
{{--                  </span>--}}
{{--                                </div>--}}
{{--                                <!-- /.info-box-content -->--}}
{{--                            </div>--}}
{{--                            <!-- /.info-box -->--}}
{{--                        </div>--}}
{{--                        <!-- /.col -->--}}
{{--                        <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="info-box bg-green">--}}
{{--                                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>--}}

{{--                                <div class="info-box-content">--}}
{{--                                    <span class="info-box-text">Likes</span>--}}
{{--                                    <span class="info-box-number">41,410</span>--}}

{{--                                    <div class="progress">--}}
{{--                                        <div class="progress-bar" style="width: 70%"></div>--}}
{{--                                    </div>--}}
{{--                                    <span class="progress-description">--}}
{{--                    70% Increase in 30 Days--}}
{{--                  </span>--}}
{{--                                </div>--}}
{{--                                <!-- /.info-box-content -->--}}
{{--                            </div>--}}
{{--                            <!-- /.info-box -->--}}
{{--                        </div>--}}
{{--                        <!-- /.col -->--}}
{{--                        <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="info-box bg-yellow">--}}
{{--                                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>--}}

{{--                                <div class="info-box-content">--}}
{{--                                    <span class="info-box-text">Events</span>--}}
{{--                                    <span class="info-box-number">41,410</span>--}}

{{--                                    <div class="progress">--}}
{{--                                        <div class="progress-bar" style="width: 70%"></div>--}}
{{--                                    </div>--}}
{{--                                    <span class="progress-description">--}}
{{--                    70% Increase in 30 Days--}}
{{--                  </span>--}}
{{--                                </div>--}}
{{--                                <!-- /.info-box-content -->--}}
{{--                            </div>--}}
{{--                            <!-- /.info-box -->--}}
{{--                        </div>--}}
{{--                        <!-- /.col -->--}}
{{--                        <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="info-box bg-red">--}}
{{--                                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>--}}

{{--                                <div class="info-box-content">--}}
{{--                                    <span class="info-box-text">Comments</span>--}}
{{--                                    <span class="info-box-number">41,410</span>--}}

{{--                                    <div class="progress">--}}
{{--                                        <div class="progress-bar" style="width: 70%"></div>--}}
{{--                                    </div>--}}
{{--                                    <span class="progress-description">--}}
{{--                    70% Increase in 30 Days--}}
{{--                  </span>--}}
{{--                                </div>--}}
{{--                                <!-- /.info-box-content -->--}}
{{--                            </div>--}}
{{--                            <!-- /.info-box -->--}}
{{--                        </div>--}}
{{--                        <!-- /.col -->--}}
{{--                    </div>--}}
{{--                    <!-- /.row -->--}}

{{--                    <!-- =========================================================== -->--}}

{{--                    <!-- Small boxes (Stat box) -->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-3 col-xs-6">--}}
{{--                            <!-- small box -->--}}
{{--                            <div class="small-box bg-aqua">--}}
{{--                                <div class="inner">--}}
{{--                                    <h3>150</h3>--}}

{{--                                    <p>New Orders</p>--}}
{{--                                </div>--}}
{{--                                <div class="icon">--}}
{{--                                    <i class="fa fa-shopping-cart"></i>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="small-box-footer">--}}
{{--                                    More info <i class="fa fa-arrow-circle-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- ./col -->--}}
{{--                        <div class="col-lg-3 col-xs-6">--}}
{{--                            <!-- small box -->--}}
{{--                            <div class="small-box bg-green">--}}
{{--                                <div class="inner">--}}
{{--                                    <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

{{--                                    <p>Bounce Rate</p>--}}
{{--                                </div>--}}
{{--                                <div class="icon">--}}
{{--                                    <i class="ion ion-stats-bars"></i>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="small-box-footer">--}}
{{--                                    More info <i class="fa fa-arrow-circle-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- ./col -->--}}
{{--                        <div class="col-lg-3 col-xs-6">--}}
{{--                            <!-- small box -->--}}
{{--                            <div class="small-box bg-yellow">--}}
{{--                                <div class="inner">--}}
{{--                                    <h3>44</h3>--}}

{{--                                    <p>User Registrations</p>--}}
{{--                                </div>--}}
{{--                                <div class="icon">--}}
{{--                                    <i class="ion ion-person-add"></i>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="small-box-footer">--}}
{{--                                    More info <i class="fa fa-arrow-circle-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- ./col -->--}}
{{--                        <div class="col-lg-3 col-xs-6">--}}
{{--                            <!-- small box -->--}}
{{--                            <div class="small-box bg-red">--}}
{{--                                <div class="inner">--}}
{{--                                    <h3>65</h3>--}}

{{--                                    <p>Unique Visitors</p>--}}
{{--                                </div>--}}
{{--                                <div class="icon">--}}
{{--                                    <i class="ion ion-pie-graph"></i>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="small-box-footer">--}}
{{--                                    More info <i class="fa fa-arrow-circle-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- ./col -->--}}
{{--                    </div>--}}
{{--                    <!-- /.row -->--}}

                @else
                    <h2 class="text-primary">hello Writer</h2>
                    <div class="card">

                    </div>
                @endif

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- end section -->

@endsection
