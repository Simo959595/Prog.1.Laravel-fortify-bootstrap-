<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Requests\HouseRequest;
use Illuminate\Support\Facades\Auth;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = House::all();
        return view('house.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('house.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(HouseRequest $request)
    {
        $house = Auth::user()->houses()->create([
            'Autore'=> $request->Autore,
            'Indirizzo'=> $request->Indirizzo,
            'MQ'=> $request->MQ,
            'TipoImmobile'=> $request->TipoImmobile,
            'Foto'=> $request->file('Foto')->store('Foto', 'public'),
        ]);
        return redirect()->route('house.index')->with('status-house', 'Immobile aggiunto con successo al sito');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        //
    }
}
