
@extends('back-end.master.admin-app')

@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="container">
                <div class="col-md-6 justify-content-center">
                    <div class="card text-center my-5">
                        <div class="card-header">
                            <h2></h2>
                            <h1 class="text-primary">Edit Profile</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('users.update' , ['user'=>$user->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group text-left">
                                    <label for="name"><span class="text-success">Profile Name</span></label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                                </div>

                                <div class="row form-group text-left">
                                    <label for="about"><span class="text-success">About me</span></label>
                                    <input type="text" class="form-control" name="about" id="about" value="{{$profile->about}}">
                                </div>

                                <div class="row form-group text-left">
                                    <label for="facebook"><span class="text-success">Facebook</span></label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" value="{{$profile->facebook}}">
                                </div>

                                <div class="row form-group text-left">
                                    <label for="tel"><span class="text-success">Tel And WhatsApp</span></label>
                                    <input type="text" class="form-control" name="tel" id="tel" value="{{$profile->tel}}">
                                </div>


                                <div class="row form-group text-left">
                                    <label for="email"><span class="text-success">Email</span></label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                                </div>

                                <div class="row form-group text-left">
                                    <label for="picture"><span class="text-success">Photo Profile</span></label>
                                    <input type="file" class="form-control" name="picture" id="picture">
                                    <hr>
                                    <img style="border-radius: 100%;width: 100px;height: 100px;" id="" class="img-circle" src="{{ Auth::user()->hasPicture()? Auth::user()->getPicture() : $user->getGravatar()}}" />
                                </div>

                                <div class="row form-group my-5">
                                    <input type="submit" class="btn btn-primary" name="update_profile" value="Update Profile">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection

