<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Generator as Faker;

// Illuminate\Database\Eloquent\Factories\HasFactory
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->sentence,
            'price' => rand(1,30),
            'category_id' => Category::factory(),    // this is important   one to many 
            // 'created_at'=> Carbon::now(),
            // 'updated_at'=> Carbon::now(),
            
        ];
    }
}




