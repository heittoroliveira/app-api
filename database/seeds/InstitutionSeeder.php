<?php

use Illuminate\Database\Seeder;
use \App\Institution;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutions = [
            [
                'abbreviation' => 'GEPT',
                'name' => 'Grupo Espirita Paulo de Tarso',
                'history' => 'criado em 1950',
                'site' => 'http://www.gept.com',
                'address_name' => 'Av Mario Nunes',
                'address_neighborhood' => 'Roosevelt',
                'address_number' => '174',
                'address_complement' => '',
                'address_longitude' => '-18.8985234',
                'address_latitude' => '-48.29292',
                'address_zip_code' => '38401-070',
                'address_city' => 'Uberlândia',
                'address_state' => 'MG',
                'user_id'=> '1',
                'institution_type_id'=> '1'
            ]

        ];
        foreach ($institutions as $institution) {
            Institution::create($institution);
        }
    }
}
