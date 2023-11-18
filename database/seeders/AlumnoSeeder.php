<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Alumno::factory(10)->create();
        Alumno::create([
            'nombre' => 'Juan',
            'edad' => 18,
            'nc' => '290839204',
            'sexo' => '1'
        ]);
        Alumno::create([
            'nombre' => 'Luis',
            'edad' => 28,
            'nc' => '9099999',
            'sexo' => '1'
        ]);
        Alumno::create([
            'nombre' => 'Maria',
            'edad' => 17,
            'nc' => '77777777',
            'sexo' => '0'
        ]);
    }
}
