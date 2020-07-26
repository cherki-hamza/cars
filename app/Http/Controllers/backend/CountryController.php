<?php

namespace App\Http\Controllers\backend;

use App\Country;
use App\Http\Controllers\Controller;
use App\Region;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        return view('back-end.country.index',['countries'=>$countries]);
    }


    public function create()
    {
        return view('back-end.country.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required|unique:countries,country_name'
        ]);
        $country = new Country();
        $country->country_name = $request->get('country');
        $country->save();
        return redirect()->back()->with('success','Country created with success');
    }


    public function show($id)
    {
        //
    }


    public function edit(Country $country)
    {
        return view('back-end.country.edit' , ['country'=>$country]);
    }


    public function update(Request $request, Country $country)
    {
        $request->validate([
            'country' => 'required|unique:countries,country_name'
        ]);
        $country->country_name = $request->get('country');
        $country->save();
        return redirect()->back()->with('success','Country Updated with success');
    }


    public function destroy(Country $country)
    {
        $country->delete();
        return redirect(route('country.index'))->with('success','<span class="alert alert-danger">Country Deleted with success</span>');
    }
}
