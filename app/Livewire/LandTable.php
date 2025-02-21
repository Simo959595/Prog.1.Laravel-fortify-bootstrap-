<?php

namespace App\Livewire;

use App\Models\Land;
use Livewire\Component;

class LandTable extends Component
{

    public function deleteLand($id){
        Land::find($id)->delete();
    }
   
    public function editLand($id){
        Land::find($id)->edit();
    }

    public function render()
    {
        return view('livewire.land-table', ['lands'=>Land::all()]);
    }
}
