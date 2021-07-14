<?php

namespace App\Http\Livewire;

use App\Models\Stand;
use Livewire\Component;
use Livewire\WithPagination;

class StandIndex extends Component
{
    use WithPagination;
    public $search;
    public $type = null;
    protected $queryString = ['search'];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {   
        if(! $this->type) {
            $stands = Stand::where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->paginate(8); 
        }
        else {
            $stands = Stand::where('type', $this->type)->where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->paginate(8); 
        }
        return view('livewire.stand-index', [
            'stands' => $stands,
            'active_type' => $this->type
        ]);
    }
}
