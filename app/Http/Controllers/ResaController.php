<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ResaController extends BaseController
{
    public function index()
    {
        return view('trips.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trips.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $request->validate([
        'name'=> 'bail|required|string|max:255',
        'age'=> 'bail|required|min:0|numeric',
        'travel'=> 'bail|required'

    ]);

        $name= $request->input('name');
        $age= $request->input('age');
        $travel= $request->input('travel');

        
        return view('trips.registered')->with(['name'=>$name,'age'=>$age,'travel'=>$travel]);
    }

}
