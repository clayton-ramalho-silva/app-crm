<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();


        for($i = 0; $i < 10; $i++){
            Customer::create([
                'name' => \Faker\Provider\pt_BR\Person::firstNameMale(),
                'email' => $faker->email(),
                'phone' => \Faker\Provider\pt_BR\PhoneNumber::phone(),
                'cellphone' => \Faker\Provider\pt_BR\PhoneNumber::cellphone(),
                'organization' => \Faker\Provider\en_US\Company::companySuffix(),
                'status' => $faker->randomElement(['active', 'deactive']),
            ]);

        }
    }
}
