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
                            <a class="nav-link " href="/datosRegistro">DatosRegistro</a>
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
                            <a class="nav-link active disabled" href="#">Fotografias</a>
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
                                <h3>Fotografia o retrato hablado de la persona Desaparecida o No Loalizada.</h3>
                                <br>
                                <h5>Se recomienda agregar fotografía a color,de frente,perfil y cuerpo entero,o en su caso retrato hablado .</h5>
                                <h3><font color="red"><strong><font color="red">*</font> Datos Obligatorios</strong></font></h3>
                                <br>

                                <div class="col-xs-4 col-sm-4 col-lg-4">
                                    <span><h5><font color="red">*</font>Tipo de imagen</h5></span>
                                    <select name="medio">
                                        <option value="0">-TIPO DE IMAGEN-</option>
                                        


                                    </select>

                                </div>
                                <br>

                                <div class="col-xs-4 col-sm-4 col-lg-6">
                                    <span><h5><font color="red">*</font>Imagen</h5></span>
                                    <input type="file" name="imagen" class="form-control-file" required="" id="imagen" accept="image/png, .jpeg, .jpg, image/gif" onchange="revisarImagen(this,1);">
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-lg-12">
                                        <input type="submit" name="Guardar" value="Guardar">
                                    </div>
                                    <br>
                                    <br>
                                </div>



                            </div>
                        </div>
                    </div>
                    </form>
                <br>

                <br>
                    <footer>
                    <div class="card-footer text-muted" style="background-color: #4254b5;">
                        <div>
                            <div class="row">
                                <div>
                                    <br>
                                    <a href="https://fiscaliaguerrero.gob.mx/"><img src="http://fiscaliaguerrero.gob.mx/wp-content/uploads/2018/07/LOG.png" width="200" height="150"></a> </div>
                                <div class="card-body">
                                    <div class="card-title" style="color:#000000; font-family:fantasy"><h2>Acerca de nosotros</h2></div>

                                    <span class="text-white">Boulevard René Juárez Cisneros S/N Colonia El Potrerito C. P. 39090
                        Chilpancingo de los Bravo, Guerrero. <br>
                        Conmutador 01 (747) 494 2999 - Teléfono para denuncias 01 800 832 7692
                        <br><a href="https://fiscaliaguerrero.gob.mx/aviso-de-privacidad-integral/">
                        <span style="color:yellow">Aviso de Privacidad</span></a></span>
                                </div>
                                <div class="card-body">
                                    <div class="card-title" style="color:#000000; font-family:fantasy"><h2>Síguenos</h2></div>
                                    <a href="https://www.facebook.com/fiscaliaguerrero/"><img src="https://cdn.iconscout.com/icon/free/png-256/facebook-social-media-fb-logo-square-44659.png" width="50" height="50"></a>
                                    <a href="https://twitter.com/FGEGuerrero"><img src="https://cdn3.iconfinder.com/data/icons/iconano-social/512/198-Twitter-512.png" width="50" height="50"></a>
                                    <a href="https://www.instagram.com/fgeguerrero/"><img src="https://i1.wp.com/alesteplaza.es/wp-content/uploads/2017/05/instagram-logo-1.png?ssl=1" width="50" height="50"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

















@endsection
