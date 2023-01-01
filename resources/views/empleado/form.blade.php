<legend>{{ $modo }} empleado</legend>

@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>


@endif

<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" class="form-control"
        name="Nombre" id="Nombre">
</div>
<br>
<div class="form-group">
    <label for="">Apellido</label>
    <input type="text" class="form-control" value="{{ isset($empleado->Apellido) ? $empleado->Apellido : old('Apellido') }}"
        name="Apellido" id="Apellido" placeholder="Ingresar Apellido">
</div>
<br>
<div class="form-group">
    <label for="">Correo</label>
    <input type="text" class="form-control" value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}"
        name="Correo" id="Correo" placeholder="Ingresar Correo">
</div>
<br>
<div class="form-group">
    @if (isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->Foto }}" width="100"
            alt="">
        <br>
    @endif
    <input type="file" name="Foto" value="" id="Foto">
</div>
<br>
<div class="form-group">
    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-primary" href="{{ url('empleado') }}">Regresar</a>

</div>
