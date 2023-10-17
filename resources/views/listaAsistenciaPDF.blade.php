<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lista de Asistencia. SUAM</title>

    <!-- Styles -->


    <style>
td, th {
    font-size: 14px;
}
    </style>

</head>
<body>
<table border="0">
    <tr>
    <td><p>
            <img src="images/baner-suam25.jpg">
        </p>
    </td>
    <td>

        <h2>LISTA DE ASISTENCIA CICLO {{ $curso->ciclo }}</h2>

    </td>
    </tr>
    <tr>
    <td colspan="2">
        <H3>Código Curso:{{ $curso->id }} - {{ $curso->nombreCurso }} Horario: {{$curso->horario}}</H3>
    </td>
    </tr>
</table>




    <table border="1">
        <thead>
        <tr>
            <th><br><br>Núm.</th>
            <th><br><br>Nombre</th>
            <th><br><br>Estatus</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
        </thead>
        <tbody>
        {{$cont=0 }}
    @foreach($listaPorGrupo as $listaPorGrup)
        <tr>
            <th scope="row">{{$cont=$cont+1 }}</th>
            <td>{{ $listaPorGrup->apellidoPaterno}} {{ $listaPorGrup->apellidoMaterno}} {{ $listaPorGrup->nombre}}</td>
            <td>{{ $listaPorGrup->status}}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
    @endforeach
        </tbody>
    </table>
<br>
<br>
<p>CENTRO UNIVERSITARIO DE CIENCIAS SOCIALES Y HUMANIDADES.</p>
<p>Sistema Universitario del Adulto Mayor (SUAM)</p>
<p>Guanajuato 1047 Guadalajara (México)
    Tel.: 33 3819 3300 Ext 23653</p>
<p>Hora de Impresión:  {{ date('d-m-Y H:i:s') }}</p>
</body>
</html>
