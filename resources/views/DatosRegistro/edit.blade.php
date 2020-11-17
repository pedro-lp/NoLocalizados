@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/DatosRegistro/'.$DatosRegistro->id) }}" method="post">
    {{csrf_field() }}
    {{method_field('PATCH')}}   

    @include('DatosRegistro.form',['Modo'=>'editar'])
</form>
</div>
@endsection