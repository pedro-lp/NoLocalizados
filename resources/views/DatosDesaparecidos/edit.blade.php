@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/datosdesaparecido/'.$datosDesaparecido->id) }}" method="post">
    {{csrf_field() }}
    {{method_field('PATCH')}}   

    @include('datosdesaparecidos.form',['Modo'=>'editar'])
</form>
</div>
@endsection