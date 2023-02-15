@extends('tema.app');

@section('title','Mostrar Tarea');

@section('contenido')
    <h3>Mostrar Tarea</h3>
    <ul>
        <li>Nombre : <strong>{{ $tareas->nombre }} </strong></li>
        <li>Finalizado : <strong>{{ $tareas->finalizado() }} </strong></li>
        <li>Fecha Limite : <strong>{{ $tareas->fecha_limite->format('d/m/Y')}} </strong></li>
        <li>Urgencia : <strong>{{ $tareas->urgencia() }}</strong></li>
        <li>Descripcion : <strong>{{ $tareas->descripcion }}<strong></li>
    </ul>
    <hr>
    <div class="row mb-2">
        <div class="md-6">
            <form action="{{ route('tarea.destroy', $tareas) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
            </form>
        </div>
    </div>
@endsection