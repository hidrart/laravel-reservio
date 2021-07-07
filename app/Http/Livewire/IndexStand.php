<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class IndexStand extends Component
{
    use WithPagination;
    public $stands;
    
    
    public function mount($stands)
    {
        $this->stands = $stands;
    }
    
    public function render()
    {
        return view('livewire.index-stand', [
            'stands' => $this->stands
        ]);
    }
}
