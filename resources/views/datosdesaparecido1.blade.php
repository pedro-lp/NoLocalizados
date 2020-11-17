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
                            <a class="nav-link" href="/datos del Registro">DatosRegistro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active disabled" href="{{ url('/datosdesaparecido') }}">Datos Generales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">DatosReportante</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Domicilio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/datosFotografia">Fotografias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Media Filiacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>

                <form action = "datosdesaparecido" method="POST">
                {{csrf_field() }}
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <br>

                                <h3><font color="black"><strong> Datos Generales de la persona Desaparecida o No Localizada</strong></font></h3>
                                <h3><font color="red"><strong><font color="red">*</font> Datos Obligatorios</strong></font></h3>
                                <br>

                                <form>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <span><h5><font color="red">*</font>Nombre(s)</h5></span>
                                            <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="NOMBRE(S)">
                                        </div>
                                        <div class="form-group">
                                            <span><h5><font color="red">*</font>Apellido Paterno</h5></span>
                                            <input type="apellidoP" class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO PATERNO">
                                        </div>
                                        <div class="form-group">
                                            <span><h5><font color="red">*</font>Apellido Materno</h5></span>
                                            <input type="apellidoM" class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO MATERNO">
                                        </div>

                                        <span><h5><font color="red">*</font>Sexo</h5></span>

                                        <select>
                                            <option value="0">-SEXO-:</option>
                                            <?php


                                            $sql = "SELECT id,sexo FROM cat_sexos";
                                            $result = $conexion->query($sql);

                                            if ($result->num_rows > 0) {
                                                while($row = mysqli_fetch_assoc($result))  {

                                                    echo '<option value=>'.$row["sexo"].'</option>';
                                                }
                                            } else {
                                                echo "0 results";
                                            }


                                            ?>
                                        </select>


                                        <span><h5><font color="red">*</font>Nacionalidad</h5></span>

                                        <select>
                                            <option value="0">Seleccione:</option>

                                        </select>



                                        <div class="form-group">
                                            <span><h5><font color="red">*</font>Curp</h5></span>

                                            <input type="curp" class="form-control" id="exampleFormControlInput1" placeholder="CURP">
                                        </div>
                                        <div class="form-group">
                                            <span><h5><font color="red">*</font>RFC</h5></span>

                                            <input type="rfc" class="form-control" id="exampleFormControlInput1" placeholder="RFC">
                                        </div>
                                        <div class="form-group">
                                            <span><h5><font color="red">*</font>Estado Civil</h5></span>



                                            <select>
                                                <option value="0">Seleccione:</option>


                                            </select>
                                        </div>
                                        <!-- Campo de entrada de fecha -->
                                        <span><h5><font color="red">*</font>Fecha de Nacimiento</h5></span>

                                        <input type="date" name="fecha" min="1990-03-25" max="2018-05-25" />

                                        <div class="form-group">
                                            <span><h5><font color="red">*</font>Edad</h5></span>
                                            <input type="edad" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        <div class="form-group">
                                            <span><h5><font color="red">*</font>Escolaridad</h5></span>

                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-12">
                                            <input type="submit" name="Guardar" value="Guardar">
                                        </div>
                                        <br>
                                        <br>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div>
                </form>
@endsection
