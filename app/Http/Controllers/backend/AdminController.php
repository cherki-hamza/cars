<?php

namespace App\Http\Controllers\backend;

use App\Carinfo;
use App\Country;
use App\Http\Controllers\Controller;
use App\Marque;
use App\Region;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('back-end.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }



}
