<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['country_id' => '1', 'state_id' => '1', 'name' => 'Uberlândia'],
            ['country_id' => '1', 'state_id' => '1', 'name' => 'Araxá']
        ];
        foreach ($cities as $city) {
            City::create($city);
        }
        
    }
}