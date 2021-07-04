<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

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

        $category = ['Cafe', 'Restaurant', 'Bar', 'Lounge'];
        return [
            'name' => $this->faker->firstName() . " " . $category[rand(0,3)], 
            'description' => $this->faker->paragraphs(3, true),
            'address' => $this->faker->address(),
            'cover' => $faker->imageUrl($width = 640, $height = 480, ['restaurant']),
            'type' => $category[rand(0,3)],
            'score' => $this->faker->randomFloat(1, 3.8, 5)
        ];
    }
}
