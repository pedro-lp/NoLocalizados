@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje'))
<div class="alert alert-success">
    {{ Session::get('Mensaje') }}
</div>

@endif
<a href="{{ url ('datosdesaparecidos/create') }}" class="btn btn-success">Agregar No Localizado</a><br><br>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Sexo</th>
            <th scope="col">Nacionalidad</th>
            <th scope="col">CURP</th>
            <th scope="col">RFC</th>
            <th scope="col">Estado Civil</th>
            <th scope="col">Estado de nacimiento</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Edad</th>
            <th scope="col">Escolaridad</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($DatosDesaparecidos as $DatDes)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$DatDes->nombre}}</td>
            <td>{{$DatDes->apellidoPat}}</td>
            <td>{{$DatDes->apellidoMat}}</td>
            <td>{{$DatDes->sexo}}</td>
            <td>{{$DatDes->nacionalidad}}</td>
            <td>{{$DatDes->curp}}</td>
            <td>{{$DatDes->rfc}}</td>
            <td>{{$DatDes->edoCivil}}</td>
            <td>{{$DatDes->edoNacimiento}}</td>
            <td>{{$DatDes->fechaNacimiento}}</td>
            <td>{{$DatDes->edad}}</td>
            <td>{{$DatDes->escolaridad}}</td>
            <td><a class="btn btn-warning" href="{{ url('/datosdesaparecidos/'.$DatDes->id.'/edit') }}" >Editar</a>
                <form method="post" action="{{ url('/datosdesaparecidos/'.$DatDes->id) }}" style="display: block">
                {{csrf_field() }}
                {{method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm ('¿Desea borrar este registro?');">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $DatosDesaparecidos ->links() }}
</div>
@endsection