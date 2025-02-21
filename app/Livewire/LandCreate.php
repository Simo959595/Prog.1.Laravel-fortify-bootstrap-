<?php

namespace App\Livewire;

use App\Models\Land;
use Livewire\Component;
use App\Livewire\LandCreate;
use Livewire\Attributes\Validate;

class LandCreate extends Component
{
    #[Validate('required|min:3')]
    public $PrezzoAlMq;
    #[Validate('required')]
    public $Mq;
    #[Validate('required|min:2')]
    public $Edificabile;

    public function landCreate(){
        $this->validate();
        Land::create(
        [
           'PrezzoAlMq'=>$this->PrezzoAlMq,
           'Mq'=>$this->Mq,
           'Edificabile'=>$this->Edificabile,
        ]
        );
        $this->cleanCreate();
    }
    
    protected function cleanCreate(){
        $this->PrezzoAlMq = '';
        $this->Mq = '';
        $this->Edificabile = '';
    }

    public function render()
    {
        return view('livewire.land-create');
    }
}
