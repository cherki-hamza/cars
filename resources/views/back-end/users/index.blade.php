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
                <h2 class="text-primary">All Users</h2>
                <div class="card">

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>User Image</th>
                                  <th>Id</th>
                                  <th>User Name</th>
                                  <th>User Email</th>
                                  <th>User Role</th>
                              </tr>
                            </thead>
                            <tbody>
                             @foreach($users as $user)
                              <tr>
                                  @if(auth()->user()->isAdmin() && $user->id == auth()->user()->id)
                                  <td><a href="{{route('users.profile' , ['user'=>Auth::user()->id])}}"><img class="img-circle" style="border-radius: 60%;width: 40px;height: 40px;" src="{{ $user->hasPicture() ? asset('storage/'.$user->getPicture()) : $user->getGravatar()}}" /></a></td>
                                  @else
                                      <td><img class="user-image" src="{{ $user->hasPicture() ? asset('storage/'.$user->getPicture()) : $user->getGravatar()}}" /></td>
                                  @endif
                                  <td><span class="text-primary">{{$user->id}}</span></td>
                                  <td><span class="text-primary">{{$user->name}}</span></td>
                                  <td><span class="text-warning">{{$user->email}}</span></td>
                                  @if(!$user->isAdmin())
                                  <td>
                                      <form action="{{route('users.make-admin' , ['user'=> $user->id])}}" method="POST">
                                          @csrf
                                          <input type="submit" class="btn btn-success" value="Make Admin">
                                      </form>
                                  </td>
                                  @else
                                      <td><span class="text-danger">{{$user->role}}</span></td>
                                  @endif
                              </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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
