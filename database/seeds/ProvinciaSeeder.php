<?php

use Illuminate\Database\Seeder;
use App\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create([
        	'provincia_nombre' => 'Buenos Aires',
        ]);

        Provincia::create([
        	'provincia_nombre' => 'Rio Negro',
        ]);
    }
}
