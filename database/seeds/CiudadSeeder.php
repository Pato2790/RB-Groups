<?php

use Illuminate\Database\Seeder;
use App\Ciudad;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create([
        	'ciudad_nombre' => 'Bahía Blanca',
        	'cp' => 8000,
        	'id_provincia' => 1,
        ]);

        Ciudad::create([
        	'ciudad_nombre' => 'Allen',
        	'cp' => 8328,
        	'id_provincia' => 2,
        ]);

        Ciudad::create([
        	'ciudad_nombre' => 'San Antonio Oeste',
        	'cp' => 8453,
        	'id_provincia' => 2,
        ]);

        Ciudad::create([
        	'ciudad_nombre' => 'Pigue',
        	'cp' => 8013,
        	'id_provincia' => 1,
        ]);
    }
}
