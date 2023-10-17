
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home">SUAM</a>

    <ul class="nav justify-content-end">



            <li>
                <a href="{{ route ('listadoAlumnos') }}">Listado de Alumnos</a>
            </li>
            <li>
                <a href="{{ route ('listadoCursos') }}">Listado de Cursos</a>
            </li>
            <li>
                <a href="{{ route ('createAlumno') }}">Capturar Alumno</a>
            </li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    </nav>
</div>



<div class="container">

        <div class="row">
            <h2>Listado de Cursos</h2>
            <br>
            <hr>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Domicilio</th>
                    <th>INE</th>
                    <th>Teléfonos</th>
                    <th>Email</th>
                    <th>Otros Datos</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->id }} - {{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}} {{$alumno->nombre}}</td>
                        <td>{{ $alumno->fechaNacimiento }}</td>
                        <td>{{ $alumno->domicilio }}, {{ $alumno->colonia }}, {{ $alumno->sector }}. CP {{ $alumno->cp }}. {{ $alumno->municipio }}</td>
                        <td>
                        @if($alumno->ine != null)
                            Si
                        @else
                            No
                        @endif
                        </td>
                        <td><strong>Casa:</strong> {{ $alumno->telCasa }} <br><strong>Cel:</strong>  {{ $alumno->telCelular }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td>Escolaridad: {{ $alumno->escolaridad}}, Estado Civil: {{ $alumno->estadoCivil }}, Jubilidado:  {{ $alumno->jubilado }} Institución: {{ $alumno->institucionJubilacion }}</td>
                        <td><p><a href="{{ route('kardex-alumno',['alumno_id' => $alumno->id]) }}" class="btn btn-success">Kardex</a></p>
                            <p><a href="{{ route('editar-alumno',['alumno_id' => $alumno->id]) }}" class="btn btn-primary"> Editar </a></p>
                            <p><a class="btn btn-primary" href="{{ route('elegirCursos', ['alumno_id' => $alumno->id]) }}" >Asignar Cursos</a></p>
                        </td>
                    </tr>

                @endforeach






                </tbody>
                <tfoot>
                <tr>
                    <th>Alumno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Domicilio</th>
                    <th>INE</th>
                    <th>Teléfonos</th>
                    <th>Email</th>
                    <th>Otros Datos</th>
                </tr>
                </tfoot>
            </table>





        </div>
    </div>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
    <!-- Scripts -->

</body>
</html>
