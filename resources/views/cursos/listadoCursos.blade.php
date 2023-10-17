@extends('layouts.app')
@section('content')

    <div class="container">
            @if(Auth::user()->role == 'admin')
        <div class="row">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <h2>Listado de Cursos {{$ciclo}}</h2>
            <hr>

            <a href="{{ route('createCurso',['ciclo'=>'2023B']) }}" class="btn btn-success">Capturar Nuevo Curso</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Instructor</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Cupo</th>
                    <th scope="col">Inscritos</th>
                    <th scope="col">Disponibles</th>
                    <th scope="col">En Espera</th>
                    <th colspan="5" scope="col"></th>
                </tr>
                </thead>
                <tbody>
               <?php $totalCupo=0; $totalInscritos=0; $totalDisponibles=0; $sumaDisponibles=0; $sumaEspera=0;?>
                @foreach($cuentaCursos as $cuentaCurso)
                    <tr>
                        <th scope="row">{{$cuentaCurso->id }}</th>
                        <td>{{ $cuentaCurso->nombreCurso }}</td>
                        <td>{{ $cuentaCurso->instructor }}</td>
                        <td>{{ $cuentaCurso->horario }}</td>
                        <td>{{ $cuentaCurso->cupo }}</td>
                        <td>{{ $cuentaCurso->inscritos }}</td>
                        @if($cuentaCurso->cupo - $cuentaCurso->inscritos <0)
                        <td>{{$disponibles=0}}</td>
                        @else
                        <td>{{ $disponibles=$cuentaCurso->cupo - $cuentaCurso->inscritos }}</td>
                        @endif
                        @if($cuentaCurso->inscritos - $cuentaCurso->cupo <0)
                            <td>{{$espera=0}}</td>
                        @else
                            <td>{{ $espera = $cuentaCurso->inscritos - $cuentaCurso->cupo  }}</td>
                        @endif
                        <td><a href="{{ route('printLista',['curso_id' => $cuentaCurso->id]) }}" target="_blank"  class="btn btn-success"> Lista de Asistencia </a></td>
                        <td><a href="{{ route('listadoPorGrupo',['curso_id' => $cuentaCurso->id]) }}" class="btn btn-primary"> Gestionar </a></td>
                        <td><a href="{{ route('info-alumnos',['curso_id' => $cuentaCurso->id]) }}" class="btn btn-primary"> Datos Contacto </a></td>
                        <td><a href="{{ route('editar-curso',['curso_id' => $cuentaCurso->id]) }}" class="btn btn-primary"> Editar </a></td>
                        <td><a href="{{ route('delete-curso',['curso_id' => $cuentaCurso->id]) }}" class="btn btn-danger"> Eliminar </a></td>
                    </tr>


                       <input type="hidden" value="{{$totalCupo = $totalCupo + $cuentaCurso->cupo}}" readonly>
                       <input type="hidden" value="{{$totalInscritos = $totalInscritos + $cuentaCurso->inscritos}}" readonly>
                        <input type="hidden" value="{{$sumaDisponibles = $sumaDisponibles + $disponibles}}" readonly>
                        <input type="hidden" value="{{$sumaEspera = $sumaEspera + $espera}}" readonly>


                @endforeach
               <td colspan="4"></td>
                    <td>{{$totalCupo}}</td>
                    <td>{{$totalInscritos}}</td>
                     <td >{{$sumaDisponibles}}</td>
               <td >{{$sumaEspera}}</td>
                <td colspan="4"></td>
                </tbody>
            </table>

        </div>
        @endif
        <p>
            <a href="{{ route('home') }}" class="btn btn-primary">< Regresar</a>
        </p>
    </div>

@endsection
