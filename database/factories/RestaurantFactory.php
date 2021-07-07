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

        return [
            'name' => $this->faker->firstName(), 
            'description' => $this->faker->paragraphs(3, true),
            'address' => $this->faker->address(),
            'cover' => $faker->imageUrl(640, 480, ['restaurant'], false, false, ['food']),
            'score' => $this->faker->randomFloat(1, 3.8, 5)
        ];
    }
}
