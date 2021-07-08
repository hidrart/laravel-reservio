<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Food;
use App\Models\User;
use App\Models\Stand;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RestaurantTest extends TestCase
{
    use RefreshDatabase;   
    
    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory([
            'name' => 'Hidrart',
            'email' => 'hdytrvli@gmail.com' 
        ])->create();
        $this->category = Category::factory(['name' => 'test'])->create();
        $this->restaurant = Restaurant::factory()->ofCategory($this->category)->create();
        $this->stand = Stand::factory()->ofRestaurant($this->restaurant)->create();
        $this->food = Food::factory()->ofRestaurant($this->restaurant)->create();
    }
    
    /** @test */
    function restaurants_index_page_contains_livewire_component()
    {
        $this->actingAs($this->user)
            ->get(route('restaurants.index'))
            ->assertSeeLivewire('index-restaurant');
    }

    /** @test */
    function restaurant_table_page_contains_livewire_component()
    {
        $this->actingAs($this->user)
            ->get(route('restaurants.table', $this->restaurant))
            ->assertSeeLivewire('index-stand');
    }
}
