<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $curso = new Curso();
        $curso->name= "principiante";
        $curso->descripcion= "Cursos de princiantes";
        $curso->categoria= "Introduccion";
        $curso->save();

        $curso1 = new Curso();
        $curso1->name= "intermedio";
        $curso1->descripcion= "Cursos de princiantes";
        $curso1->categoria= "Introduccion";
        $curso1->save();

        $curso2 = new Curso();
        $curso2->name= "avanzado";
        $curso2->descripcion= "Cursos de princiantes";
        $curso2->categoria= "Introduccion";
        $curso2->save();
    }
}
