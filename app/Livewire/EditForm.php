<?php

namespace App\Livewire;

use App\Models\Land;
use Livewire\Component;
use App\Livewire\EditForm;

class EditForm extends Component
{

    public $landId;
    public $PrezzoAlMq;
    public $Mq;
    public $Edificabile;

    public function mount($landId){
        $land = Land::find($landId);
        $this->PrezzoAlMq = $land->PrezzoAlMq;
        $this->Mq = $land->Mq;
        $this->Edificabile = $land->Edificabile;
    }

    public function updateLand(){
        $land = Land::find($this->landId);
        $land->update(
            [
                'PrezzoAlMq'=>$this->PrezzoAlMq,
                'Mq'=>$this->Mq,
                'Edificabile'=>$this->Edificabile,
            ]
            );
                return redirect()->route('land.land_index');
        }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
