<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="{{asset('assets/img/dev.png')}}" type="image/x-icon">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('assets/backend/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/skins/skin-blue.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">

<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{route('main')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>ars</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Dashboard </b>Cars</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img class="user-image" src="{{ Auth::user()->hasPicture() ? asset(Auth::user()->getPicture()) : Auth::user()->getGravatar()}}" />
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{Auth::user()->name ?? ''}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img  class="img-circle" src="{{ Auth::user()->hasPicture()? asset(Auth::user()->getPicture()) : Auth::user()->getGravatar()}}"/>

                            <p>
                                {{Auth::user()->name ?? ''}}
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{route('users.profile' , ['user'=>Auth()->user()->id])}}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('users.edit' , ['user'=>Auth::user()->id])}}" class="btn btn-default btn-flat">Edit Profile</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
{{--                <li>--}}
{{--                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img style="border-radius: 60%;width: 40px;height: 40px;" class="user-image" src="{{ Auth::user()->hasPicture()? asset(Auth::user()->getPicture()) : Auth::user()->getGravatar()}}"/>
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name ?? ''}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header text-center text-primary">Menus</li>
            <li class="header align-content-center"><span><a href="{{route('main')}}" class="btn btn-danger"><i class="mr-4 fa fa-home"></i>Home Front-end</a></span></li>
            <!-- Optionally, you can add icons to the links -->
            @if(auth()->user()->isAdmin())
{{--                <li class="header ml-4 align-content-center"><span><a href="" class="btn btn-success"><i class="mr-4 fa fa-user"></i>My Profile</a></span></li>--}}

                <li class="treeview">
                    <a href="#"><i class="fa fa-plus"></i> <span>Profile</span>
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('users.profile' , ['user'=>Auth::user()->id])}}">Show Profile</a></li>
                        <li><a href="{{route('users.edit' , ['user'=>Auth::user()->id])}}">Edit Profile</a></li>
                        <li><a href="#">any ...</a></li>
                    </ul>
                </li>

                <li class="active"><a href="{{route('users.index')}}"><i class="fa fa-plus"></i> <span>Show All Users</span></a></li>

            @else
                <li class="active"><a href="{{route('users.index')}}"><i class="fa fa-plus"></i> <span>Hello User</span></a></li>
            @endif
            <!-- start Country -->
            <li class="treeview">
                <a href="#"><i class="fa fa-plus"></i> <span>Country</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('country.create')}}">Add New Country</a></li>
                    <li><a href="{{route('country.index')}}">Show All Country</a></li>
                    <li><a href="#">any ...</a></li>
                </ul>
            </li>
            <!-- end Country -->

            <!-- start Cars -->
            <li class="treeview">
                <a href="#"><i class="fa fa-plus"></i> <span>Cars Ads</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('cars.create')}}">Add New Car</a></li>
                    <li><a href="{{route('cars.index')}}">Show All Car Ads</a></li>
                    <li><a href="#">any ...</a></li>
                </ul>
            </li>
            <!-- end Cars -->

            <!-- start Marque -->
            <li class="treeview">
                <a href="#"><i class="fa fa-plus"></i> <span>Marque</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('marque.create')}}">Add New Marque</a></li>
                    <li><a href="{{route('marque.index')}}">Show All Marque</a></li>
                    <li><a href="#">any ...</a></li>
                </ul>
            </li>
            <!-- end Marque -->

            <!-- start Region -->
            <li class="treeview">
                <a href="#"><i class="fa fa-plus"></i> <span>City</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('region.create')}}">Add New City</a></li>
                    <li><a href="{{route('region.index')}}">Show All City</a></li>
                    <li><a href="#">any ...</a></li>
                </ul>
            </li>
            <!-- end Region -->

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

