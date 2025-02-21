<?php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;
use App\Http\Controllers\LandController;

class LandController extends Controller
{
    public function landCreate(){
        return view ('land.land_create');
        return redirect()->route('land.land_index')->with('status-land', 'Terreno aggiunto con successo al sito');
    }
    
    public function landIndex(){
        $lands = Land::all();
        return view ('land.land_index', compact('lands'));
    }
    
    public function landEdit(Land $land){
        return view ('land.land-edit', compact('land'));
    }

}
