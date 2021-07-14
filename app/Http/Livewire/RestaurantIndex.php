<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Restaurant;
use Livewire\WithPagination;

class RestaurantIndex extends Component
{   
    use WithPagination;
    public $search;
    public $category;
    protected $queryString = ['search', 'category'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function updatingCategory()
    {
        $this->resetPage();   
    }   
    
    public function render()
    {
        if(! $this->category) { 
            $restaurant = Restaurant::where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->paginate(8); 
        }
        else {
            $restaurant = Restaurant::where('category', $this->category)->where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->paginate(8); 
        }
        return view('livewire.restaurant-index', [
            'restaurants' => $restaurant,
            'active_category' => $this->category
        ]);
    }
}   
