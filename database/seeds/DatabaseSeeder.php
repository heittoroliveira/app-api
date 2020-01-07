<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ActivityTypeSeeder::class,
            EventCategorySeeder::class,
            InstitutionTypeSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            InstitutionSeeder::class
        ]);

    }
}
