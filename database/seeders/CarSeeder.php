<?php

namespace Database\Seeders;

use App\Jobs\CreateCar;
use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/car.json");
        $cars = json_decode($json);

        foreach ($cars as $key => $value) {
            $car = Car::firstOrCreate(
                ['value' =>  $value->value],
                ['title' => $value->title]
            );

            foreach($value->models as $key => $model) {
                $carModel = CarModel::firstOrNew(
                    ['value' => $model->value],
                );
                $carModel->car_id = $car->id;
                $carModel->title = $model->title;
                $carModel->save();
            }
        }
    }
}
