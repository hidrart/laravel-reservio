<?php

namespace App\Http\Livewire;

use App\Models\Stand;
use Livewire\Component;
use App\Models\Category;
use App\Models\Restaurant;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'categories' => Category::all(),
            'restaurants' => Restaurant::orderBy('score', 'desc')->take(3)->get(),
            'stands' => Stand::take(3)->get()
        ]);
    }
}
