<?php

namespace App\Http\Livewire;

use App\Models\Stand;
use Livewire\Component;
use App\Models\Category;
use App\Models\Restaurant;
use Livewire\WithPagination;

class RestaurantTable extends Component
{
    use WithPagination;
    public Restaurant $restaurant;
    public $type = null;
    public $search;
    protected $queryString = ['search'];
    
    public function updatingSearch()
    {
        $this->resetPage();   
    }
    
    public function render()
    {   
        $restaurantStands = $this->restaurant->stand();
        
        if(! $this->type) {
            $stands =  $restaurantStands->where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->paginate(8); 
        }
        else {
            $stands =  $restaurantStands->where('type', $this->type)->where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->paginate(8); 
        }    

        return view('livewire.restaurant-table', [
            'restaurant' => $this->restaurant,
            'stands' => $stands,
            'active_type' => $this->type,
            'foods' => $this->restaurant->food()
        ]);
    }
}
