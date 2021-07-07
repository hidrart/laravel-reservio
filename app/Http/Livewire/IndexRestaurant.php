<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Restaurant;
use Livewire\WithPagination;

class IndexRestaurant extends Component
{   
    use WithPagination;
    
    public function render()
    {
        return view('livewire.index-restaurant', [
            'restaurants' => Restaurant::inRandomOrder()->Paginate(12)
        ]);
    }
}   
