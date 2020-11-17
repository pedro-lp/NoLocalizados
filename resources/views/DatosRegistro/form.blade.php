<?php
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('localhost', 'root', null, 'no_localizados', 33069);
?>
<h3>
    <font color="black"><strong> Datos de Registro de la persona Desaparecida o No Localizada</strong></font>
</h3>

<div class="form-group">
    <label for="expedinte" class="control-label">{{'Expedinte'}}</label>
    <input type="text" class="form-control {{$errors->has('expedinte')?'is-invalid':'' }} " name="expedinte" id="expedinte" value="{{ isset($DatosRegistro->expedinte) ? $DatosRegistro->expedinte:old('expedinte') }}">
    {!! $errors->first('expedinte','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="fechaInicio" class="control-label">{{'Fecha Inicio'}}</label>
    <input type="date" class="form-control {{$errors->has('fechaInicio')?'is-invalid':'' }} " name="fechaInicio" id="fechaInicio" value="{{ isset($DatosRegistro->fechaInicio) ? $DatosRegistro->fechaInicio:old('fechaInicio') }}">
    {!! $errors->first('fechaInicio','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="estatus" class="control-label">{{'Estatus'}}</label>
    <input type="text" class="form-control {{$errors->has('estatus')?'is-invalid':'' }} " name="estatus" id="estatus" value="{{ isset($DatosRegistro->estatus) ? $DatosRegistro->estatus:old('estatus') }}">
    {!! $errors->first('estatus','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="delito" class="control-label">{{'Delito'}}</label>
    <input type="text" class="form-control {{$errors->has('delito')?'is-invalid':'' }}" name="delito" id="delito" value="{{ isset($DatosRegistro->delito) ? $DatosRegistro->delito:old('delito') }}">
    {!! $errors->first('delito','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="medioCon" class="control-label">{{'Medio de Conocimiento'}}</label>
    <input type="text" class="form-control {{$errors->has('medioCon')?'is-invalid':'' }} " name="medioCon" id="medioCon" value="{{ isset($DatosRegistro->medioCon) ? $DatosRegistro->medioCon:old('medioCon') }}">
    {!! $errors->first('medioCon','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="AtravesDe" class="control-label">{{'A traves De'}}</label>
    <input type="text" class="form-control {{$errors->has('AtravesDe')?'is-invalid':'' }} " name="AtravesDe" id="AtravesDe" value="{{ isset($DatosRegistro->AtravesDe) ? $DatosRegistro->AtravesDe:old('AtravesDe') }}">
    {!! $errors->first('AtravesDe','<div class="invalid-feedback">:message</div>') !!}
</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
<a class="btn btn-primary" href="{{ url ('datosregistro') }}">Regresar</a>