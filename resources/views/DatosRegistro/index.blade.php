@extends('layouts.app')

@section('content')
<div><!--div class="container"-->
@if(Session::has('Mensaje'))
<div class="alert alert-success">
    {{ Session::get('Mensaje') }}
</div>

@endif
<a href="{{ url ('datosregistro/create') }}" class="btn btn-success">Agregar Datos Registro</a><br><br>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Expedinte</th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Estatus</th>
            <th scope="col">Delito</th>
            <th scope="col">Medio Conocimiento</th>
            <th scope="col">A traves De</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($DatosRegistro as $DatDes)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$DatDes->expedinte}}</td>
            <td>{{$DatDes->fechaInicio}}</td>
            <td>{{$DatDes->idEstatus}}</td>
            <td>{{$DatDes->idDelito}}</td>
            <td>{{$DatDes->idMedioConocimiento}}</td>
            <td>{{$DatDes->idAtravesDe}}</td>
            <td><a class="btn btn-warning" href="{{ url('/datosregistro/'.$DatDes->id.'/edit') }}" >Editar</a>
                <form method="post" action="{{ url('/datosregistro/'.$DatDes->id) }}" style="display: block">
                {{csrf_field() }}
                {{method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm ('¿Desea borrar este registro?');">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $DatosRegistro ->links() }}
</div>
@endsection