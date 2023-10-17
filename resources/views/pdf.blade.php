<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reporte Materias Inscritas</title>

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">


</head>
<body>
< class="container">
<p class="text-center"><img class="img-responsive" src="images/baner-suam50.jpg"></p>
    <p class="text-center"><strong>SUAM. Sistema Universitario del Adulto Mayor</strong></p>
<br>
<H3>{{ $alumno->nombre}} {{ $alumno->apellidoPaterno}} {{ $alumno->apellidoMaterno}} </H3>
<hr>
    <p>Datos de acceso al sistema:</p>
<p>
    <?php

    $emailLimpio = $user1->email;
    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
    $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
    $texto = str_replace($no_permitidas, $permitidas ,$emailLimpio);

    $passwordLimpio=strtolower($texto.substr($alumno->fechaNacimiento,8, 2));

    echo "USUARIO: ".$emailLimpio;
    echo " CONTRASEÑA: ".$passwordLimpio;
    ?>
</p>
<p>Hora de Impresión:  {{ date('d-m-Y H:i:s') }}</p>

<hr>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h4 class="panel-title">Kardex por Ciclo</h4>

    </div>
    <div class="panel-body">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Ciclo</th>
                <th scope="col">Materia</th>
                <th scope="col">Estatus</th>
                <th scope="col">Horario</th>
            </tr>
            </thead>
            <tbody>

            @foreach($materias as $materia)
                <tr>
                    <td>{{ $materia->ciclo}}</td>
                    <td>{{ $materia->nombreCurso}}</td>
                    <td>{{ $materia->status}}</td>
                    <td>{{ $materia->horario}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <hr>
    <p>En caso de tener alguna duda o desea que le apoyen en el registro puede contactar por teléfono o whatsapp a los números 33-31-06-71-60 y 33-12-25-33-79</p>
    <br>
    <p>CENTRO UNIVERSITARIO DE CIENCIAS SOCIALES Y HUMANIDADES.</p>
    <p>Sistema Universitario del Adulto Mayor (SUAM)</p>
    <p>Guanajuato 1047 Guadalajara (México)
        Tel.: 33 3819 3300 Ext 23653</p>
</div>


</body>
</html>
