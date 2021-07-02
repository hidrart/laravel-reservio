<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
use App\Models\Stand;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        User::factory()->count(10)->create();
        Restaurant::factory()
            ->count(10)
            ->hasStand(20)
            ->create();
    }
}
