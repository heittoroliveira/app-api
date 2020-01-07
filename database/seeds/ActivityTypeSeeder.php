<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\ActivityType;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activityTypes = [
            ['name' => 'Evangelização Infantil'],
            ['name' => 'Mocidade Espirita'],
            ['name' => 'Tratamento Espiritual'],
            ['name' => 'Reunião Publica'],
            ['name' => 'Trabalho Assistencial'],
            ['name' => 'Campanha de Rua'],
            ['name' => 'Estudo Sistematizado'],
            ['name' => 'Desenvolvimento Mediunico'],
            ['name' => 'Psicografia'],
            ['name' => 'Passe']
        ];
        foreach ($activityTypes as $activityType) {
            ActivityType::create($activityType);
        }
        
    }
}