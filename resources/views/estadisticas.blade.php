@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <p>
            <a href="{{ route('home') }}" class="btn btn-primary">< Regresar</a>
        </p>
        <h3>Estadísticas Generales</h3>
        <hr>
        <h4>Total de Alumnos: {{$total}}</h4>
    </div>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" colspan="2">Inscritos por ciclo a una materia o más</th>
                </tr>
                </thead>
                <tbody>
                @foreach($inscritosPorCiclo as $inscritoPorCiclo)
                    <tr>
                        <td>{{$inscritoPorCiclo->ciclo}}</td>
                        <td>{{$inscritoPorCiclo->inscritosPorCiclo}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{--<div class="row">
        <div class="col-md-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" colspan="2">Inscripciones nuevas de alumnos</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nuevosAlumnos as $nuevosAlumno)
                    <tr>
                        <td>Fecha Inscripción: {{$nuevosAlumno->mes}} / {{$nuevosAlumno->anio}}</td>
                        <td>Inscritos: {{$nuevosAlumno->inscritos_mes}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>--}}
    <div class="row">
        <div class="col-md-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" colspan="2">Conteo por Estado</th>
                </tr>
                </thead>
                <tbody>
                @foreach($conteoPorEstado as $conteoPorEstad)
                    <tr>
                        @if(is_null($conteoPorEstad->estado))
                            <td>Sin especificar</td>
                        @else
                            <td>{{$conteoPorEstad->estado}}</td>
                        @endif
                        <td>{{$conteoPorEstad->conteo_estado}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" colspan="2">Equipo con el que cuenta</th>
                </tr>
                </thead>
                <tbody>
                <tr>
        </tr>
        @foreach($dispositivos as $dispositivo)
            <tr>
                <td>{{$dispositivo->equipo}} : {{$dispositivo->dispositivos}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
    </div>
            <div class="row">
                <div class="col-md-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col" colspan="2">Cuenta con Internet</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($internet as $internetRow)
                            <tr>
                                <td>{{$internetRow->internet}}</td>
                                <td>{{$internetRow->cuenta}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" colspan="2">Jubilado</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jubilaciones as $jubilacion)
                    <tr>
                        <td>{{$jubilacion->jubilado}}</td>
                        <td>{{$jubilacion->cuenta}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" colspan="2">Escolaridad</th>
                </tr>
                </thead>
                <tbody>
                @foreach($escolaridad as $escolaridadRow)
                    <tr>
                        <td>{{$escolaridadRow->escolaridad}}</td>
                        <td>{{$escolaridadRow->cuenta}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <p>
        <a href="{{ route('home') }}" class="btn btn-primary">< Regresar</a>
    </p>
</div>
@endsection
