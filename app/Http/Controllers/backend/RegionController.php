<?php

namespace App\Http\Controllers\backend;


use App\Country;
use App\Http\Controllers\Controller;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $regions = Region::all();
        return view('back-end.region.index',['regions'=>$regions]);
    }


    public function create()
    {
        $countries = Country::all();
        return view('back-end.region.create',compact('countries'));
    }


    public function store(Request $request)
    {
        $request->validate([
           'region' => 'required|unique:regions,region_name',
           'country' => 'required',
        ]);
        $region = new Region();
        $region->region_name = $request->get('region');
        $region->country_id = $request->get('country');
        $region->save();
        return redirect()->back()->with('success','Region created with success');
    }

    public function show($id)
    {
        //
    }

    public function edit(Region $region)
    {
        $countries = Country::all();
        return view('back-end.region.edit' , ['region'=>$region , 'countries'=>$countries]);
    }


    public function update(Request $request, Region $region)
    {
        $request->validate([
            'region' => 'required|unique:regions,region_name',
            'country' => 'required',
        ]);
        $region->region_name = $request->get('region');
        $region->country_id = $request->get('country');
        $region->save();
        return redirect()->back()->with('success','Region Updated with success');
    }


    public function destroy($id)
    {
        //
    }
}
