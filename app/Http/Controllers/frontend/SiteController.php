<?php

namespace App\Http\Controllers\frontend;

use App\Carinfo;
use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Marque;
use App\Region;
use App\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $cars = Carinfo::all()->take(3);
        $countries = Country::all();
        $regions = Region::all();
        $marques  = Marque::all();
        return view('front-end.index' , ['countries'=>$countries , 'regions'=>$regions , 'marques'=>$marques , 'cars'=>$cars]);
    }

    public function home(){
        $count_cars = Carinfo::all()->count();
        $count_marques = Marque::all()->count();
        $count_countries = Country::all()->count();
        $count_cities = Region::all()->count();
        $count_users = User::all()->count();
        return view('back-end.admin.dashboard',[
            'count_cars'=>$count_cars,
            'count_marque'=>$count_marques,
            'count_cities'=>$count_countries,
            'count_cars'=>$count_cars,
            'count_users'=>$count_users,
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(site $site)
    {
        //
    }


    public function edit(site $site)
    {
        //
    }


    public function update(Request $request, site $site)
    {
        //
    }


    public function destroy(site $site)
    {
        //
    }
}
