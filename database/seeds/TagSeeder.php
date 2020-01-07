<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['name' => 'Conversa Fraterna'],
            ['name' => 'Passe'],
            ['name' => 'Corrente Magnética'],
            ['name' => 'Desobsessão Individual'],
            ['name' => 'Homeopatia'],
            ['name' => 'Cirurgia Espiritual'],
            ['name' => 'Conversa com Mentor'],
            ['name' => 'Passe no Leito'],
            ['name' => 'Fluidificação das Águas'],
            ['name' => 'Reiki'],
            ['name' => 'Cromoterapia'],
            ['name' => 'Tratamento Espiritual à Distância'],
            ['name' => 'Tratamento Espiritual Infantil'],
            ['name' => 'Outros']

        ];
        foreach ($tags as $tag) {
            Tag::create($tag);
        }
        
    }
}