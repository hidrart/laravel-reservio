<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $restaurantCategory = ['Cafe', 'Restaurant', 'Bar', 'Lounge'];
    
    public function run()
    {   
        User::factory([
            'name' => 'Hidrart',
            'email' => 'hdytrvli@gmail.com' 
        ])->create();
        User::factory()->count(10)->create();
        foreach($this->restaurantCategory as $category){
            Category::factory([
                'name' => $category
            ])
            ->has(                        
                Restaurant::factory()
                ->count(30)
                ->hasStand(20)
                ->hasFood(30)
            )
            ->create();
        }


    }
}
