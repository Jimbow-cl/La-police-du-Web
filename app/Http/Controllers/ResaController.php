<?php

namespace App\Http\Controllers;

use App\Models\Resa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ResaController extends BaseController
{
    public function index()
    {
        $reservations = Resa::all();
        return view('trips.index')->with([
            'reservations'=> $reservations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $command = 'create';
        return view('trips.create')->with([
            'command' => $command,
            
        ]);
        
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

        Resa::create(['name'=>$name,'age'=>$age,'travel'=>$travel]);

        return view('trips.registered')->with(['name'=>$name,'age'=>$age,'travel'=>$travel]);
    }
    public function destroy(string $id)
    {
        $resa = Resa::findOrFail($id);
        $resa->delete();
        return redirect(route('index'));
    }
    public function update(Request $request, string $id)
    {
        $reservations = Resa::findOrFail($id);
        $reservations->name = $request->name;
        $reservations->age = $request->age;
        $reservations->travel = $request->travel;
        $reservations->save();
        return redirect(route('index'));
    }
    public function show(string $id)
    {
        $reservations = Resa::findOrFail($id);
        return view('trips.show')->with([
            'reservation' => $reservations
        ]);
    }
    public function edit(string $id)
    {   $command = 'update';
        $reservations = Resa::findOrFail($id);
        return view('trips.create')->with([
            'command' => $command,
            'reservation' => $reservations
        ]);
        
    }
}
