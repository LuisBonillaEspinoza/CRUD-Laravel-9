@csrf
<div class="row">
    <div class="col-md-12">
        <label for="InputNombre" class="form-label">Nombre de la Tarea</label>
        <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="..." value="{{ old('nombre',$tarea->nombre) }}">
    </div>

    <div class="col-md-12">
        <div class="form-check">
            <input type="checkbox" name="finalizada" class="form-check-input" id="InputFinalizada" value="{{ old('finalizada',$tarea->finalizado) }}" @checked(old('finalizada',$tarea->finalizado))>
            <label for="InputFinalizada" class="form-check-label">Finalizada</label>
        </div>
    </div>

    <div class="col-md-6 mt-1">
        <label for="SelectUrgencia" class="form-label">* Urgencia</label>
        <select name="urgencia" id="SelectUrgencia" class="form-select">
            @for($x=0;$x<count($urgencias);$x++)
                <option value = {{ $x }} @selected(old('urgencia', $tarea->urgencia) == $urgencias[$x]))>{{ $urgencias[$x] }}</option>
            @endfor
        </select>
    </div>

    <div class="col-md-6">
        <label for="InputFechaLimite" class="form-label">Fecha Limite</label>
        <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite', is_null($tarea->fecha_limite) ? '' : $tarea->fecha_limite->format('Y-m-d\TH:i')) }}">
    </div>

    <div class="col-md-12">
        <label for="TextAreaDescripcion" class="form-label">Descripcion</label>
        <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control">{{ old('descripcion',$tarea->descripcion) }}</textarea>
    </div>

    <div class="col-md-12 text-end mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>