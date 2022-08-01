<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(file('database/data/customers.txt') as $line) {
            $value = substr($line, 0, -1);
            Customer::create([
                "full_name" => $value,
                "customer_location_id" => 2
            ]);
        }
    }
}
