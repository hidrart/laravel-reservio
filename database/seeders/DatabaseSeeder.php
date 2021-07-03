<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
use App\Models\Stand;
use App\Models\Food;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {   
        User::factory()->count(10)->create();
        Restaurant::factory()
            ->count(10)
            ->hasStand(6)
            ->hasFood(10)
            ->create();
    }
}
