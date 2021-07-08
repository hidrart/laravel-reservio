<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $foodCategory = ['Main','Beverage','Dairy','Vegetable','Meat'];
        $tableCategory = ['vip', 'regular', 'private', 'bussiness'];
        $restaurantCategory = ['Cafe', 'Restaurant', 'Bar', 'Lounge'];
        
        return view('livewire.navigation', [
            'restaurant_categories' => $restaurantCategory,
            'food_categories' => $foodCategory,
            'stand_categories' => $tableCategory
        ]);
    }
}
