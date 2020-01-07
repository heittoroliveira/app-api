<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\EventCategory;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventCategories = [
            ['name' => 'Alimentação'],
            ['name' => 'Estudo'],
            ['name' => 'Bazar'],
            ['name' => 'Campanha']
        ];
        foreach ($eventCategories as $eventCategory) {
            EventCategory::create($eventCategory);
        }

    }
}
