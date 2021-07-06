<?php

namespace Database\Factories;

use App\Models\Stand;
use Illuminate\Database\Eloquent\Factories\Factory;

class StandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));
        $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));
        $type = ['vip', 'regular', 'private', 'bussiness'];
        
        return [            
            'name' => $this->faker->firstName() . " " . "Table", 
            'description' => $this->faker->paragraphs(rand(3,5), true),
            'cover' => $faker->imageUrl(640, 480, ['restaurant'], false, false, ['table']),
            'type' => $type[rand(0,3)],
            'seat' => $this->faker->numberBetween(2, 8)         
        ];
    }
}
