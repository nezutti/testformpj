<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     * 
     * 
     * 
    */
   
   
   
   
    public function definition()
    {
        return [
            'fullname'=>$this->faker->name(),
            'gender'=>$this->faker->randomElement($array=array('1','2')),
            'email'=>$this->faker->safeEmail(),
            'postcode'=>$this->faker->postcode(),
            'address'=>$this->faker->address(),
            'building_name'=>$this->faker->word(),
            'opinion'=>$this->faker->text(120),
            'created_at'=>$this->faker->datetimeBetween('-3 month','+3 month')
        ];
    }
}
