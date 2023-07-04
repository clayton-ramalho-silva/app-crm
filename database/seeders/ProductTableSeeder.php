<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $produtos = ['Criação de site', 'Criação de E-comerce', 'Criação de logo', 'Criação de Identidade Visual', 'Midias Sociais'];

        foreach($produtos as $produto){
            Product::create([
                'name' => $produto,
                'description' => $faker->paragraph(),
                'price' => $faker->randomElement([250, 500, 750, 1000, 1500, 200,]),
                'status' => $faker->randomElement(['active', 'deactive']),
            ]);

        }
    }
}
