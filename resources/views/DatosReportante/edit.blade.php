@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/datosreportante/'.$DatosReportante->id) }}" method="post">
    {{csrf_field() }}
    {{method_field('PATCH')}}   

    @include('DatosReportante.form',['Modo'=>'editar'])
</form>
</div>
@endsection