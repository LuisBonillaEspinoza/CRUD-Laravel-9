<div>
    <div class="row">
        <div class="col-md-12">
            <input type="text" name="" id="" placeholder="Buscar" class="form-control" wire:model="busqueda">
        </div>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Finalizada</th>
                <th>Fecha Limite</th>
                <th>Urgencia</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarea as $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->nombre }}
                    </td>
                    <td>
                        {{ $item->finalizado()}}
                    </td>
                    <td>
                        {{ $item->fecha_limite->format('d/m/Y')}}
                    </td>
                    <td>
                        {{ $item->urgencia() }}
                    </td>
                    <td>
                        {{ $item->descripcion }}
                    </td>
                    <td>
                        <a href="{{ route('tarea.edit',$item->id) }}">Editar</a>
                        <a href="{{ route('tarea.show',$item->id) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tarea->links() }}
</div>
