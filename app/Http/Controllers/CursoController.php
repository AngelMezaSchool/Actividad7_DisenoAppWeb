<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Convensiones de llamado a metodo
    // Pagina principal
    public function index(){
        return view('cursos.index');
    }

    // Formulario para crear algo
    public function create(){
        return view('cursos.create');
    }

    // Mostrar un elemento en particular
    public function show($course){
        return view('cursos.show', compact('course'));
    }


}
