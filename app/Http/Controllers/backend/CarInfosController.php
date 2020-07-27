<?php

namespace App\Http\Controllers\backend;

use App\Carinfo;
use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCarRequest;
use App\Marque;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarInfosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Carinfo::all();
        return view('back-end.cars.index',['cars'=>$cars]);
    }


    public function create()
    {
        $marques = Marque::all();
        $countries = Country::all();
        $regions = Region::all();
        return view('back-end.cars.create' , [
                  'marques'=>$marques , 'regions'=>$regions , 'countries'=>$countries
            ]);
    }


    public function store(Request $request)
    {
        $request->validate([
           'price'=>'required',
           'photo'=>'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'distance'=>'required',
           'date'=>'required',
           'marque_id'=>'required',
           'region_id'=>'required',
           'country_id'=>'required',
        ]);

        if ($request->hasFile('photo')){
            $image = $request->file('photo');
            $input['image_name'] = time().  '.' . $image->getClientOriginalExtension();
            $the_image = '/images/'.$input['image_name'];
            $destinationPath = public_path('/images');
            $image->move($destinationPath , $input['image_name']);
            Carinfo::create([
                'car_price'  => $request->input('price'),
                'car_photo'  =>  $the_image,
                'car_distance'  => $request->input('distance'),
                'car_date_construction' => $request->input('date'),
                'marque_id'=> $request->input('marque_id'),
                'city_id'=> $request->input('region_id'),
                'country_id'=> $request->input('country_id'),
                'user_id'=> $request->input('user_id'),
            ]);
        }

        return redirect(route('cars.index'))->with('success' , '<span class="alert alert-success">the car saved successfully</span>');
    }


    public function show(Carinfo $car)
    {
        $car = Carinfo::find($car)->first();
        return view('back-end.cars.show',[
            'car'=>$car,
        ]);
    }


    public function edit(Carinfo $car , Marque $marque , Country $country , Region $region)
    {
        $marques = Marque::all();
        $countries = Country::all();
        $regions = Region::all();
        return view('back-end.cars.edit',[
            'car'=>$car,
            'marque'=>$marque ,'region'=>$region , 'country'=>$country,
            'marques'=>$marques , 'regions'=>$regions , 'countries'=>$countries,
        ]);
    }


    public function update(UpdateCarRequest $request, Carinfo $car)
    {
          if ($request->hasFile('photo')){

//              $image = $request->photo->store('cars-img' , 'public');
//              Storage::disk('public')->delete($car->car_photo);
              $image = $request->file('photo');
              $input['image_name'] = time().  '.' . $image->getClientOriginalExtension();
              $the_image = '/images/'.$input['image_name'];
              $destinationPath = public_path('/images');
              $image->move($destinationPath , $input['image_name']);


              $car->update([
                  'car_price'  => $request->input('price'),
                  'car_distance'  => $request->input('distance'),
                  'car_photo'  => $the_image,
                  'car_date_construction' => $request->input('date'),
                  'marque_id'=> $request->input('marque_id'),
                  'city_id'=> $request->input('region_id'),
                  'country_id'=> $request->input('country_id'),
                  'user_id'=> $request->input('user_id'),
              ]);

          }else{
              $car->update([
                  'car_price'  => $request->input('price'),
                  'car_distance'  => $request->input('distance'),
                  'car_date_construction' => $request->input('date'),
                  'marque_id'=> $request->input('marque_id'),
                  'city_id'=> $request->input('region_id'),
                  'country_id'=> $request->input('country_id'),
                  'user_id'=> $request->input('user_id'),
              ]);
          }

        return redirect(route('cars.index'))->with('success','The Car Updated with success');
    }


    public function destroy(Carinfo $car)
    {
        $car->delete();
        return redirect(route('cars.index'))->with('success','<span class="alert alert-danger">Car Deleted with success</span>');
    }


}
