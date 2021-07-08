<?php

namespace App\Http\Livewire;

use App\Models\Stand;
use Livewire\Component;
use App\Models\Category;
use App\Models\Restaurant;
use Livewire\WithPagination;

class IndexStand extends Component
{
    use WithPagination;
    public Restaurant $restaurant;
    public $search;
    protected $queryString = ['search'];
    
    public function updatingSearch()
    {
        $this->resetPage();   
    }
    
    public function render()
    {   
        $category = Category::where('id', $this->restaurant->category_id)->first();
        return view('livewire.index-stand', [
            'category' => $category,
            'restaurant' => $this->restaurant,
            'stands' => Stand::where('restaurant_id', $this->restaurant->id)->where('name', 'like', '%'.$this->search.'%')->paginate(12)
        ]);
    }
}
