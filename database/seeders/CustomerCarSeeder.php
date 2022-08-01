<?php

namespace Database\Seeders;

use App\Models\CustomerCar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         CustomerCar::create([
            'customer_id' => 1,
            'car_id' => 1,
            'car_model_id' => 1,
            'delivery_id' =>1
        ]);
    }
}
