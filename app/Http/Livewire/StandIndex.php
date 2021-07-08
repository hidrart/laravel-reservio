<?php

namespace App\Http\Livewire;

use App\Models\Stand;
use Livewire\Component;
use Livewire\WithPagination;

class StandIndex extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();   
    }
    
    public function render()
    {
        $stands = Stand::where('name', 'like', '%'.$this->search.'%')->inRandomOrder()->paginate(12); 
        return view('livewire.stand-index',[
            'stands' => $stands
        ]);
    }
}
