@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if(Auth::user()->role != 'admin')
            <h4>Debido a la actual contingencia por COVID-19, la modalidad de estudios ser&aacute &uacutenicamente virtual durante el presente calendario. Por lo tanto, es indispensable contar con un dispositivo m&oacutevil y tener buen manejo del Whatsapp.
                En caso de querer tomar cualquier curso de computaci&oacuten o smartphone  es necesario que usted cuente con el equipo adecuado: Computadora y conexi&oacuten a Internet</h4>
            @endif
            <div class="panel panel-default">
            @if(Auth::user()->role != 'admin')

                <div class="panel-heading"><strong>Alumno: </strong>{{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        Bienvenido a su Tablero Personal
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}

                        </div>
                    @endif
                        <br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th colspan="3" scope="col">Menú</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><br>Expediente</th>
                                <td><br>Le permite ver sus datos personales registrados y sus materias inscritas</td>
                                <td><br><a href="{{ route('kardex-alumno',['alumno_id' => Auth::user()->IdAlumno]) }}" class="btn btn-success">Expendiente</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><br>Inscribir Materias</th>
                                <td><br>Permite inscribirse a las materias ofertadas en el semestre actual</td>
                                <td><br><a class="btn btn-primary" href="{{ route('elegirCursos',['alumno_id' => Auth::user()->IdAlumno, 'ciclo'=>'2023A']) }}" >Inscribir Materias</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><br>Imprimir Materias Inscritas</th>
                                <td><br>Permite imprimir las materias inscritas en el ciclo escolar y le muestra su usuario y contraseña para el sistema</td>
                                <td><br><a class="btn btn-primary" href="{{ route('print',['alumno_id' => Auth::user()->IdAlumno]) }}" target="_blank">Imprimir Materias</a></td>
                            </tr>
                            </tbody>
                        </table>


                </div>

            @else
                    <div class="panel-heading"><strong>Panel de Administración.</strong></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            Bienvenido a su Tablero Personal
                        @endif
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <br>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th colspan="5" scope="col">Menú</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Listado de Cursos</th>
                                    <td>Permite gestionar los cursos para darlos de alta, eliminar y editar</td>


                                    <td>

{{--<p><a href="{{ route('listadoCursos',['ciclo'=>'2020B']) }}" class="btn btn-success">Cursos 2020B</a></p>
                                    <p><a href="{{ route('listadoCursos',['ciclo'=>'2021A']) }}" class="btn btn-success">Cursos 2021A</a></p></td>
				  <td><p> <a href="{{ route('listadoCursos',['ciclo'=>'2021B']) }}" class="btn btn-success">Cursos 2021B</a></p>

			<p><a href="{{ route('listadoCursos',['ciclo'=>'2022A']) }}" class="btn btn-success">Cursos 2022A </a></p>

<p><a href="{{ route('listadoCursos',['ciclo'=>'2022B']) }}" class="btn btn-success">Cursos 2022B </a></p>
--}}
<p><a href="{{ route('listadoCursos',['ciclo'=>'2023A']) }}" class="btn btn-success">Cursos 2023A </a></p>
<p><a href="{{ route('listadoCursos',['ciclo'=>'2023B']) }}" class="btn btn-success">Cursos 2023B </a></p></td>
                                </tr>

                                <tr>
                                    <th scope="row">Listado de Alumnos</th>
                                    <td>Permite capturar, modificar y eliminar Alumnos</td>
                                    <td colspan="3"><a class="btn btn-primary" href="{{ route('listadoAlumnos') }}" > Listado de Alumnos </a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Capturar Alumno</th>
                                    <td>Capturar un nuevo Alumno</td>
                                    <td colspan="3"><a href="{{ route('createAlumno') }}" class="btn btn-success"> Capturar Alumno </a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Estadísticas Generales</th>
                                    <td>Permite observar el número de personas que cuentan con internet, que tipo de equipo y si son jubilados</td>
                                    <td colspan="3"><a href="{{ route('estadisticas') }}" class="btn btn-primary"> Estadísticas Generales </a></td>
                                </tr>
                                </tbody>
                            </table>




                    </div>

            @endif
            </div>
        </div>


    </div>
    <p><a class="btn btn-primary" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Salir
        </a></p>
    <h4>En caso de tener alguna duda o desea que le apoyen en el registro puede contactar por teléfono o whatsapp a los números 33-31-06-71-60 y 33-12-25-33-79</h4>
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
