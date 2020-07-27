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
{{--                profile {{$user}}--}}
{{--                photo <img src="{{Auth::user()->getGravatar()}}" style="border-radius: 60%; width: 60px;height: 60px;" alt="">--}}

                <div class="col-md-12">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="widget-user-image">
{{--                                <img style="border-radius: 80%;width: 80px;height: 80px;" id="{{$user->hasPicture()}}" class="img-circle" src="{{ $user->hasPicture()? asset('storage/'.$user->getPicture()) : $user->getGravatar()}}" />--}}
                                <img style="border-radius: 80%;width: 80px;height: 80px;"  class="img-circle" src="{{ ($user->hasPicture())? $user->getPicture() : $user->getGravatar()}}"  alt=""/>
                            </div>
                            <!-- /.widget-user-image -->
                            <div class="ml-5">
                            <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
                            <h4 class="widget-user-desc">{{Auth::user()->email}}</h4>
                            <h5 class="widget-user-desc">{{Auth::user()->role}}</h5>
                            </div>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="#">About me <span class="pull-right badge bg-red">{{$profile->about}}</span></a></li>
                                <li><a href="#">Email <span class="pull-right badge bg-blue">{{$user->email}}</span></a></li>
                                <li><a href="#">Telephone And whatsApp <span class="pull-right badge bg-aqua">{{$profile->tel}}</span></a></li>
                                <li><a href="#">Facebook <span class="pull-right badge bg-green">{{$profile->facebook}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
        <!-- end section -->

@endsection
