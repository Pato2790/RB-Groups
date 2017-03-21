<?php

use Illuminate\Database\Seeder;
use App\Deporte;

class DeporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deporte::create([
        	'id' => 1,
        	'deporte' => 'Futbol',
        ]);

        Deporte::create([
        	'id' => 2,
        	'deporte' => 'Basket',
        ]);

        Deporte::create([
        	'id' => 3,
        	'deporte' => 'Tennis',
        ]);

        Deporte::create([
        	'id' => 4,
        	'deporte' => 'Paddel',
        ]);

        Deporte::create([
        	'id' => 5,
        	'deporte' => 'Voley',
        ]);

        Deporte::create([
        	'id' => 6,
        	'deporte' => 'Handball',
        ]);
    }
}
