<?php

use Illuminate\Database\Seeder;
use App\Superficie;

class SuperficieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Superficie::create([
        	'id' => '1',
        	'Superficie' => 'Césped',
        ]);

        Superficie::create([
        	'id' => '2',
        	'Superficie' => 'Sintético',
        ]);

        Superficie::create([
        	'id' => '3',
        	'Superficie' => 'Piso Flotante',
        ]);

        Superficie::create([
        	'id' => '4',
        	'Superficie' => 'Cemento',
        ]);

        Superficie::create([
        	'id' => '5',
        	'Superficie' => 'Tierra',
        ]);

        Superficie::create([
        	'id' => '6',
        	'Superficie' => 'Polvo Ladrillo',
        ]);
    }
}
