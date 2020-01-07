<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'Brasil']
        ];
        foreach ($countries as $country) {
            Country::create($country);
        }
        
    }
}