<?php

use App\Models\Pokemon;
use Illuminate\Database\Seeder;

class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = [
            [
                'name' => 'Pikachu',
                'weight' => '6.0 kg',
                'type' => 'elettro',
                'pokedex-number' => 25
            ],
            [
                'name' => 'Charmender',
                'weight' => '8.5 kg',
                'type' => 'fuoco',
                'pokedex-number' => 4
            ],
            [
                'name' => 'Nidorino',
                'weight' => '19.5 kg',
                'type' => 'veleno',
                'pokedex-number' => 33
            ]
        ];

        foreach ($pokemons as $pokemon) {
            $newPokemon = new Pokemon;
            $newPokemon->name=$pokemon['name'];
            $newPokemon->weight=$pokemon['weight'];
            $newPokemon->type=$pokemon['type'];
            $newPokemon['pokedex_number']=$pokemon['pokedex-number'];
            $newPokemon->save();
        }
    }
}
