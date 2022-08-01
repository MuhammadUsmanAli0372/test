<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();

        $json = File::get("database/data/states.json");
        $states = json_decode($json);

        foreach ($states as $key => $value) {
            State::create([
                "name" => $value->name,
                "code" => $value->code,
                "capital" => $value->capital,
                "year" => $value->year
            ]);
        }
    }
}
