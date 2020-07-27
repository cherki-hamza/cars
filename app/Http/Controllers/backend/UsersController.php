<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('back-end.users.index')->with('users' , User::all());
    }

    public function makeAdmin(User $user){
        $user->role = "admin";
        $user->save();
        return redirect(route('users.index'));
    }

    public function edit(User $user){
         $profile = $user->profile;
        return view('back-end.users.edit' , ['user'=>$user , 'profile'=>$profile]);
    }

    public function profile(User $user){
        $profile = $user->profile;
        return view('back-end.users.profile' , ['user'=>$user , 'profile'=>$profile]);
    }

    // update user profile ------------------------------------------------------------------//
    public function update(User $user , Request $request){
        $profile = $user->profile;
        $data = $request->all();
        if($request->hasFile('picture')){
//            $picture = $request->picture->store('Profile-img','public');
//            $data['picture'] = $picture;
            $image = $request->file('picture');
            $input['image_name'] = time().  '.' . $image->getClientOriginalExtension();
            $the_image = '/images/'.$input['image_name'];
            $destinationPath = public_path('/images');
            $image->move($destinationPath , $input['image_name']);
            $data['picture'] = $the_image;
        }
        $profile->update($data);
        return redirect(route('users.index'));


    }
    //-------------------------------------------------------------------------------------//

}
