<?php

use Illuminate\Database\Seeder;
use App\Dia;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dia::create([
        	'id' => '1',
        	'dia' => 'Lunes',
        	'dia_ingles' => 'monday',
        ]);

        Dia::create([
        	'id' => '2',
        	'dia' => 'Martes',
        	'dia_ingles' => 'tuesday',
        ]);

        Dia::create([
        	'id' => '3',
        	'dia' => 'Miércoles',
        	'dia_ingles' => 'wednesday',
        ]);

        Dia::create([
        	'id' => '4',
        	'dia' => 'Jueves',
        	'dia_ingles' => 'thursday',
        ]);

        Dia::create([
        	'id' => '5',
        	'dia' => 'Viernes',
        	'dia_ingles' => 'friday',
        ]);

        Dia::create([
        	'id' => '6',
        	'dia' => 'Sábado',
        	'dia_ingles' => 'saturday',
        ]);

        Dia::create([
        	'id' => '7',
        	'dia' => 'Domingo',
        	'dia_ingles' => 'sunday',
        ]);
    }
}
