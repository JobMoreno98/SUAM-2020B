@extends('layouts.app')
@section('content')
<style>
    th, td {
        font-size: 8px;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive" src="../images/baner-suam25.jpg">
            </div>
            <div class="col-sm-6">
                <h3>LISTA DE ASISTENCIA CICLO 2020-B</h3>
            </div>
<hr>
        </div>
        @if(Auth::user()->role == 'admin')
            <div class="row">



                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre Curso</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Cupo</th>
                        <th scope="col">Ciclo</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$curso->id }}</th>
                            <td>{{ $curso->nombreCurso }}</td>
                            <td>{{ $curso->instructor }}</td>
                            <td>{{ $curso->horario }}</td>
                            <td>{{ $curso->cupo }}</td>
                            <td>{{ $curso->ciclo }}</td>
                        </tr>
                    </tbody>
                </table>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Núm.</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Estatus</th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>
                            <th scope="col"><img src="../images/fechaLista.png"></th>

                        </tr>
                        </thead>
                        <tbody>
                        <form>
                        {{$cont=0 }}
                        @foreach($listaPorGrupo as $listaPorGrup)
                            <tr>

                                <th scope="row">{{$cont=$cont+1 }}</th>
                                <td>{{ $listaPorGrup->apellidoPaterno }}</td>
                                <td>{{ $listaPorGrup->apellidoMaterno }}</td>
                                <td>{{ $listaPorGrup->nombre }}</td>
                                <td>{{ $listaPorGrup->telefono }}</td>
                                <td>{{ $listaPorGrup->status }}</td>

                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>
                                <td> <img src="../images/cuadro.png" width="70%"> </td>


                            </tr>
                        @endforeach
                        </form>
                        </tbody>
                    </table>
            </div>
        @endif

    </div>

@endsection
