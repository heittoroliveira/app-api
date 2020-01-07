<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\InstitutionType;

class InstitutionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutionTypes = [
            ['name' => 'Centro Espirita'],
            ['name' => 'Instituição Unificadora'],
            ['name' => 'Arte Espirita'],
            ['name' => 'Escola Espírita'],
            ['name' => 'Posto de Assistência']
        ];
        foreach ($institutionTypes as $institutionType) {
            InstitutionType::create($institutionType);
        }
        
    }
}
