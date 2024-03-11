
@extends('layout.plantilla')

@section('tittle', 'Cursos')

@section('content')
    <h1>Bienvenido a los cursos avanzados</h1>
    <h1>Vamos a el curso: {{$course}}</h1>
    <button onclick="window.location.href = '{{ asset('home.blade.php') }}';">HOME</button>
@endsection
