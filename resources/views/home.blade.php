@extends('layout.plantilla')

@section('title', 'Home')

@section('content')

    <h1>Bienvenido a tus cursos</h1>
    <h2>Cursos Disponibles:</h2>
    <ul>
        <li>Principiante: Curso de Introducción a la robotica</li>
        <li>Intermedio: Curso de Desarrollo Web de los robotos</li>
        <li>Avanzado: Curso de Desarrollo de Aplicaciones roboticas</li>
    </ul>
    <button onclick="window.location.href = 'cursos';">Ir a Cursos</button>

@endsection
