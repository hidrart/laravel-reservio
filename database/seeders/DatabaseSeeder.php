<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\User;
use App\Models\Stand;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {   
        User::factory([
            'name' => 'Hidrart',
            'email' => 'hdytrvli@gmail.com' 
        ])->create();
        User::factory()->count(10)->create();
        Restaurant::factory()
            ->count(10)
            ->hasStand(6)
            ->hasFood(10)
            ->create();
    }
}
