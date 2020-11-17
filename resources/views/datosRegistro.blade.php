@extends('layouts.app')
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<?php

$conexion = mysqli_connect('localhost', 'root', null, 'appwebnolocalizados', 33069);

if (!$conexion) {
    echo 'Error';
} else{
    echo 'Conectado';
}

?>


<meta charset="utf-8" />



@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active disabled" href="/datos del Registro">DatosRegistro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/datosdesaparecido">Datos Generales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">DatosReportante</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Domicilio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('../datosFotografia') }}">Fotografias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Media Filiacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>

                <form action = "cargar.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <br>

                                <h3><font color="black"><strong> Datos del Registro</strong></font></h3>
                                <br>
                                <form>
                                <div class="col-xs-4">
                                    <p class="text-danger">
                                        <h5><p class="text-danger"><label for="exampleFormControlInput1">Estatus*</label></p>
                                    <select>
                                        <option value="0">-Estatus de la Víctima-</option>
                                        
                                    </select>
                                    <br>
                                </div>
                                <br>
                                    <div class="col-xs-4 ">
                                        <p class="text-danger"><label for="exampleFormControlInput1">Delito*</label>
                                        </p>
                                        <select>
                                            <option value="0">-DELITO-</option>
                                            
                                        </select>

                                        <br>
                                        <br>

                                        <p class="text-danger"><label for="exampleFormControlInput1">Medio de Conocimiento*</label>
                                        </p>

                                        <select>
                                            <option value="0">-MEDIO DE CONOCIMIENTO-</option>
                                            

                                        </select>
                                        <br>
                                        <br>

                                        <p class="text-danger"><label for="exampleFormControlInput1">A través de:</label>
                                        </p>

                                        <select>
                                            <option value="0">--MEDIO DE COMUNICACIÓN--</option>
                                            


                                        </select>
                                        <p class="text-danger"><label for="exampleFormControlInput1">Expediente</label>
                                            <input type="expediente" class="form-control" id="exampleFormControlInput1" name="expediente"placeholder="EXPEDIENTE">
                                        </p>
                                        <p class="text-danger"><label for="exampleFormControlInput1">Fecha de Inicio</label>
                                            <input type="fechaInicio" class="form-control" id="exampleFormControlInput1" placeholder="DD/MM/YY">
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                                <input type="submit" name="Guardar" value="Guardar">
                                            </div>
                                            <br>
                                            <br>
                                        </div>


                                    </div>

                                </form>



                            </div>
                        </div>
                    </div>
                </form>

@endsection
