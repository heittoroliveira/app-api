<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['country_id' => '1',
             'name' => 'MG']
        ];
        foreach ($states as $state) {
            State::create($state);
        }
        
    }
}