<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Provider\pt_BR\PhoneNumber;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();


        // criar 10 registros leads


        for($i = 0; $i < 10; $i++){
            Lead::create([
                'title' => $faker->word(),
                'description' => $faker->paragraph(),
                'value' => $faker->randomNumber(4, true),
                'name_customer' => \Faker\Provider\pt_BR\Person::firstNameMale(),
                'phone_customer' => \Faker\Provider\pt_BR\PhoneNumber::cellphoneNumber(),
                'email_customer' => $faker->email(),
                'product' => $faker->randomElement(['Criação de site', 'Criação de E-comerce', 'Criação de logo', 'Criação de Identidade Visual', 'Midias Sociais']),
                'source' => $faker->randomElement(['site', 'facebook', 'google', 'whatsapp','instagram', 'indicacao']),
                'stages' => $faker->randomElement(['new', 'flow', 'prospect', 'negotiation', 'win', 'lost']),

            ]);
        }
    }
}
