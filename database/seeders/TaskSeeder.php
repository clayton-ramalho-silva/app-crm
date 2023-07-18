<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++){
            Task::create([
                'title' => $faker->randomElement(['Ligar para Cliente', 'Enviar email para Cliente', 'Marcar reunião', 'Enviar orçmanto']),
                'description' => $faker->paragraph(),
                'status' => $faker->randomElement(['done', 'pending']),
                'priority' => $faker->randomElement(['low', 'middle', 'high']),
                'lead_id' => $faker->randomElement([1, 2, 3, 4, 5]),
                'user_id' => 1,
            ]);
        }
    }
}
