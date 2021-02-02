<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User ;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'mobile' => $this->faker->phoneNumber,
            
            'user_id' => User::factory(),    // this is important   one to many 
           

        ];
    }
}
