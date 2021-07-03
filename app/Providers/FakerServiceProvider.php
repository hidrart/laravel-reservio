<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            $faker = \Faker\Factory::create();
            $faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));
            $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));
            return $faker;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
