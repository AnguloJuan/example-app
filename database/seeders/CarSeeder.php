<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = new Car();
        $car->name = 'Ferrari';
        $car->description = 'Ferrari 2021';
        $car->year = 2021;

        $car->save();

        $car = new Car();
        $car->name = 'Lamborghini';
        $car->description = 'Lamborghini 2021';
        $car->year = 2021;

        $car->save();

    }
}
