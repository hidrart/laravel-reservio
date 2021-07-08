<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Restaurant;
use Livewire\WithPagination;

class IndexRestaurant extends Component
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
        $restaurant = Restaurant::where('name', 'like', '%'.$this->search.'%')->inRandomOrder()->paginate(12); 
        return view('livewire.index-restaurant', [
            'restaurants' => $restaurant
        ]);
    }
}   
