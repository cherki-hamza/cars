<?php

namespace App\Http\Controllers\frontend;

use App\Carinfo;
use App\Country;
use App\Http\Controllers\Controller;
use App\Marque;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResultCarController extends Controller
{
    // secure the result controller ==> just show the result for the Auth user or admin user => just for your idea
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show the result page
    public function result_page(){
      return view('front-end.result_car');
    }

    // get the result_city_page page
    public function result_city_page(Carinfo $carinfo,Request $request){
        $city_id = $request->city;
        $carinfo = Carinfo::where('city_id',$city_id)->get();
        //return $carinfo;
        return view('front-end.result_car_by_city',['cars_by_city'=>$carinfo]);
    }

    // get the result_country_page page
    public function result_country_page(Carinfo $carinfo,Request $request){
        //dd($request->country);
        $country_id = $request->country;
        $carinfo = Carinfo::where('country_id',$country_id)->get();
       return view('front-end.result_car',['cars_by_country'=>$carinfo]);
    }

    // get the cat_country_page page
    public function cat_country_page(){
        return view('front-end.car_cat_country');
    }


    // function to get data from research by marque and by country and by user_id
    public function search_result(Carinfo $car , Request $request){

            $marque_id = $request->input('marque');
            $country_id = $request->input('country');
            $user_id = $request->input('user_id');

            $cars = Carinfo::where('marque_id',$marque_id)->where('country_id',$country_id)->where('user_id',$user_id)->get();

       return view('front-end.result_car_marque_country',['cars'=>$cars]);
    }

    // function to get All cars by Country
    public function search_by_country(Carinfo $car_by_country,Request $request){
        $country_id = $request->input('the_country');
        $user_id = $request->input('user_id');
        $car_by_country = Carinfo::where('country_id',$country_id)->where('user_id',$user_id)->get();
        return view('front-end.result_car_country',['car_by_country'=>$car_by_country]);
    }

    // function to get All cars by marque
    public function search_by_marque(Carinfo $car_by_marque,Request $request){
        $marque_id = $request->input('the_marque');
        $user_id = $request->input('user_id');
        $car_by_marque = Carinfo::where('marque_id',$marque_id)->where('user_id',$user_id)->get();
        return view('front-end.result_car_region',['car_by_marque'=>$car_by_marque]);
    }

    // function
    // function to get All cars by Country
    public function cat_by_country(Carinfo $car_by_country,Request $request){
        $country_id = $request->get('the_country');
        $user_id = $request->get('user_id');
        $car_by_country = Carinfo::where('country_id',$country_id)->where('user_id',$user_id)->get();
        return view('front-end.car_cat_country',['car_by_country'=>$car_by_country]);
    }

    // function to search car
    public function search(Marque $marque,Country $country,Carinfo $carinfo , Request $request){
        // get the search input
        $search = $request->get('search');
        // return the search by marque
        $search_by_marque = Marque::where('marque_name','like','%'.$search.'%')->get();

        // search by country
        $search_by_country = Country::where('country_name','like','%'.$search.'%')->get();

        // search by city
        $search_by_city = Region::where('region_name','like','%'.$search.'%')->get();

       // return $search_result;
        return view('front-end.search_result',[
            'search_by_marque'=>$search_by_marque ,
            'search_by_country'=>$search_by_country,
            'search_by_city'=>$search_by_city,

        ]);
    }


}
