<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Marque;
use App\User;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $marques = Marque::all();
        return view('back-end.marque.index',['marques'=>$marques]);
    }


    public function create()
    {
        return view('back-end.marque.create');
    }


    public function store(Request $request)
    {
        $request->validate([
           'marque' => 'required|unique:marques,marque_name'
        ]);
        $marque = new Marque();
        $marque->marque_name = $request->get('marque');
        $marque->save();
        return redirect()->back()->with('success','Marque created with success');
    }


    public function show(Marque $marque)
    {
        // this method call model data biding find auto data
        return view('back-end.marque.show',['marque'=>$marque]);
    }


    public function edit(Marque $marque)
    {
        return view('back-end.marque.edit',['marque'=>$marque]);
    }


    public function update(Request $request,Marque $marque)
    {
        $request->validate([
            'marque_name' => 'required|unique:marques,marque_name'
        ]);
        $marque->marque_name = $request->get('marque_name');
        $marque->save();
        return redirect()->back()->with('success','Marque updated with success');
    }


    public function destroy($id)
    {
        //
    }
}
