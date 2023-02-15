@extends('tema.app');

@section('title','Listado de Tareas');

@section('contenido')
    <h3>Listado de Tareas</h3>

   @livewire('tarea-index')
@endsection