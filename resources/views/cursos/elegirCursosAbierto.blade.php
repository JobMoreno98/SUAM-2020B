@extends('layouts.app')
@section('content')
    <div class="container">
        <div class)="row">
            <h2>Selección de Cursos</h2>

            <h3><strong>Alumno: </strong>{{ $alumno->apellidoPaterno }} {{ $alumno->apellidoMaterno }} {{ $alumno->nombre }}</h3>

            <form action="{{ route ('saveSeleccionCursos') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
                {!! csrf_field() !!}

                <div class="form-group">
                    <input type="hidden" class="form-control" id="IdAlumno" name="IdAlumno" value="{{ $alumno->id }}" readonly>
                </div>
                <div class="form-group">
                    <label>Puede elegir hasta tres cursos. </label>
                </div>
                <hr>
                <div class="form-group">
                    <label for="estadoCivil">Curso 1:</label>
                    <select class="form-control" id="curso1" name="curso1">
                        <option selected value="0">Elegir Curso</option>
                        @foreach($cuentaCursos as $cuentaCurso)
                            <option value="{{$cuentaCurso->id }}">{{$cuentaCurso->id }} {{ $cuentaCurso->nombreCurso }} - Horario: {{$cuentaCurso->horario }}.
                                <?php $disponibles = $cuentaCurso->cupo - $cuentaCurso->inscritos;
                                if($disponibles<=0)
                                    echo "Sin lugares disponibles";
                                else
                                    echo $disponibles;
                                ?>
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estadoCivil">Curso 2:</label>
                    <select class="form-control" id="curso2" name="curso2">
                        <option selected value="0">Elegir Curso</option>
                        @foreach($cuentaCursos as $cuentaCurso)
                            <option value="{{$cuentaCurso->id }}">{{$cuentaCurso->id }} {{ $cuentaCurso->nombreCurso }} - Horario: {{$cuentaCurso->horario }}.
                                <?php $disponibles = $cuentaCurso->cupo - $cuentaCurso->inscritos;
                                if($disponibles<=0)
                                    echo "Sin lugares disponibles";
                                else
                                    echo $disponibles;
                                ?>
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estadoCivil">Curso 3:</label>
                    <select class="form-control" id="curso3" name="curso3">
                        <option selected value="0">Elegir Curso</option>
                        @foreach($cuentaCursos as $cuentaCurso)
                            <option value="{{$cuentaCurso->id }}">{{$cuentaCurso->id }} {{ $cuentaCurso->nombreCurso }} - Horario: {{$cuentaCurso->horario }}.
                                <?php $disponibles = $cuentaCurso->cupo - $cuentaCurso->inscritos;
                                if($disponibles<=0)
                                    echo "Sin lugares disponibles";
                                else
                                    echo $disponibles;
                                ?>
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('home') }}" class="btn btn-danger">Cancelar</a>

            <h2>Listado de Cursos</h2>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Lugares Disponibles</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cuentaCursos as $cuentaCurso)
                        <tr>
                            <th scope="row">{{ $cuentaCurso->nombreCurso }}</th>
                            <td>{{ $cuentaCurso->horario }}.</td>
                            <td>
                                @if( $cuentaCurso->cupo - $cuentaCurso->inscritos  <= 0)
                                    Sin Lugares Disponiles.
                                @else
                                    Disponibles: {{$cuentaCurso->cupo - $cuentaCurso->inscritos}}
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>


            </form>
        </div>
        <div class="row">
            <br>
            <hr>
            <p>CENTRO UNIVERSITARIO DE CIENCIAS SOCIALES Y HUMANIDADES.</p>
            <p>Sistema Universitario del Adulto Mayor (SUAM)</p>
            <p>Guanajuato 1047 Guadalajara (México)
                Tel.: 33 3819 3300 Ext 23653</p>
        </div>
    </div>
@endsection
