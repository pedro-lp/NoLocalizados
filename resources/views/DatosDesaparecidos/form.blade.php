<?php
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('localhost', 'root', null, 'no_localizados', 33069);
?>
<div class="form-group">
    <label for="nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':'' }} " name="nombre" id="nombre" value="{{ isset($datosDesaparecido->nombre) ? $datosDesaparecido->nombre:old('nombre') }}">
    {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
    <label for="apellidoPat" class="control-label">{{'Apellido Paterno'}}</label>
    <input type="text" class="form-control {{$errors->has('apellidoPat')?'is-invalid':'' }} " name="apellidoPat" id="apellidoPat" value="{{ isset($datosDesaparecido->apellidoPat) ? $datosDesaparecido->apellidoPat:old('apellidoPat') }}">
    {!! $errors->first('apellidoPat','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="apellidoMat" class="control-label">{{'Apellido Materno'}}</label>
    <input type="text" class="form-control {{$errors->has('apellidoMat')?'is-invalid':'' }}" name="apellidoMat" id="apellidoMat" value="{{ isset($datosDesaparecido->apellidoMat) ? $datosDesaparecido->apellidoMat:old('apellidoMat') }}">
    {!! $errors->first('apellidoMat','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="input-group mb-3">
    <label for="sexo" class="input-group-text">{{'Sexo'}}</label>
    <select class="custom-select {{$errors->has('sexo')?'is-invalid':'' }}" name="sexo" id="sexo">
        <option value="{{ isset($datosDesaparecido->sexo) ? $datosDesaparecido->sexo:old('sexo') }}">{{ isset($datosDesaparecido->sexo) ? $datosDesaparecido->sexo:'Seleccione...'}}</option>
        <?php
        // Realizamos la consulta para extraer los datos
        $query = $mysqli->query("SELECT * FROM catsexo");
        while ($valores = mysqli_fetch_array($query)) {
            // En esta sección estamos llenando el select con datos extraidos de una base de datos.
            echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
        }
        ?>
    </select>
</div>
<div class="input-group mb-3">
    <label for="nacionalidad" class="input-group-text">{{'Nacionalidad'}}</label>
    <select class="custom-select {{$errors->has('nacionalidad')?'is-invalid':'' }}" name="nacionalidad" id="nacionalidad">
        <option value="{{ isset($datosDesaparecido->nacionalidad) ? $datosDesaparecido->nacionalidad:old('nacionalidad') }}">{{ isset($datosDesaparecido->nacionalidad) ? $datosDesaparecido->nacionalidad:'Seleccione...'}}</option>
        <option value="0">Mexicana</option>
        <option value="1">EstadoUnidense</option>
    </select>
</div>

<div class="form-group">
    <label for="curp" class="control-label">{{'CURP'}}</label>
    <input type="text" class="form-control {{$errors->has('curp')?'is-invalid':'' }} " name="curp" id="curp" value="{{ isset($datosDesaparecido->curp) ? $datosDesaparecido->curp:old('curp') }}">
    {!! $errors->first('curp','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="rfc" class="control-label">{{'RFC'}}</label>
    <input type="text" class="form-control {{$errors->has('rfc')?'is-invalid':'' }} " name="rfc" id="rfc" value="{{ isset($datosDesaparecido->rfc) ? $datosDesaparecido->rfc:old('rfc') }}">
    {!! $errors->first('rfc','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="input-group mb-3">
    <label for="edoCivil" class="input-group-text">{{'Estado Civil'}}</label>
    <select class="custom-select {{$errors->has('edoCivil')?'is-invalid':'' }}" name="edoCivil" id="edoCivil">
        <option value="{{ isset($datosDesaparecido->edoCivil) ? $datosDesaparecido->edoCivil:old('edoCivil') }}">{{ isset($datosDesaparecido->edoCivil) ? $datosDesaparecido->edoCivil:'Seleccione...'}}</option>
        <option value="0">Casado(a)</option>
        <option value="1">soltero(a)</option>
    </select>
</div>

<div class="input-group mb-3">
    <label for="edoNacimiento" class="input-group-text">{{'Estado de nacimiento'}}</label>
    <select class="custom-select {{$errors->has('edoNacimiento')?'is-invalid':'' }}" name="edoNacimiento" id="edoNacimiento">
        <option value="{{ isset($datosDesaparecido->edoNacimiento) ? $datosDesaparecido->edoNacimiento:old('edoNacimiento') }}">{{ isset($datosDesaparecido->edoNacimiento) ? $datosDesaparecido->edoNacimiento:'Seleccione...'}}</option>
        <option value="0">Guerrero</option>
        <option value="1">Oaxaca</option>
    </select>
</div>

<div class="form-group">
    <label for="fechaNacimiento" class="control-label">{{'Fecha de nacimiento'}}</label>
    <input type="date" class="form-control {{$errors->has('fechaNacimiento')?'is-invalid':'' }} " name="fechaNacimiento" id="fechaNacimiento" value="{{ isset($datosDesaparecido->fechaNacimiento) ? $datosDesaparecido->fechaNacimiento:old('fechaNacimiento') }}">
    {!! $errors->first('fechaNacimiento','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="edad" class="control-label">{{'Edad'}}</label>
    <input type="text" class="form-control {{$errors->has('edad')?'is-invalid':'' }} " name="edad" id="edad" value="{{ isset($datosDesaparecido->edad) ? $datosDesaparecido->edad:old('edad') }}">
    {!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="input-group mb-3">
    <label for="escolaridad" class="input-group-text">{{'Escolaridad'}}</label>
    <select class="custom-select {{$errors->has('escolaridad')?'is-invalid':'' }}" name="escolaridad" id="escolaridad">
        <option value="{{ isset($datosDesaparecido->escolaridad) ? $datosDesaparecido->escolaridad:old('escolaridad') }}">{{ isset($datosDesaparecido->escolaridad) ? $datosDesaparecido->escolaridad:'Seleccione...'}}</option>
        <option value="0">Primaria</option>
        <option value="1">Secundaria</option>
    </select>
</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
<a class="btn btn-primary" href="{{ url ('datosdesaparecidos') }}">Regresar</a>