@extends('layouts.app')
@section('content')

    <div class="container">
    @if(Auth::user()->IdAlumno == $alumno->id || Auth::user()->role == 'admin')
        <div class="row">
            <p>
                <a href="{{ route('home') }}" class="btn btn-primary">< Regresar</a>
            </p>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Ficha Individual del Alumno</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th colspan="2" scope="col">{{$alumno->id }} - {{ $alumno->apellidoPaterno }} {{ $alumno->apellidoMaterno }} {{ $alumno->nombre }} </th>



                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Domicilio</th>
                            <td>{{ $alumno->domicilio }}. Colonia: {{ $alumno->colonia }}. Sector: {{ $alumno->sector }}
                                CP: {{ $alumno->cp }}. Municipio: {{ $alumno->municipio }}. {{$alumno->estado}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Estado</th>
                            <td>{{ $alumno->estado }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Teléfono Casa</th>
                            <td>{{ $alumno->telCasa }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Celular</th>
                            <td>{{ $alumno->telCelular }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ $alumno->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Escolaridad</th>
                            <td>{{ $alumno->escolaridad }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Estado Civil</th>
                            <td>{{ $alumno->estadoCivil }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Contacto de Emergencia</th>
                            <td>{{ $alumno->contacto }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Jubilado</th>
                            <td>{{ $alumno->jubilado }}. Institución: {{ $alumno->institucionJubilacion }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Equipo e Internet</th>
                            <td>Equipo: {{ $alumno->equipo }}. Internet: {{ $alumno->internet }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Datos de Acceso</th>
                            <td>USUARIO: {{$user1->email}}
                                <?php
                                $emailLimpio = $alumno->apellidoPaterno;
                                $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
                                $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
                                $texto = str_replace($no_permitidas, $permitidas ,$emailLimpio);

                                $passwordLimpio=strtolower($texto.substr($alumno->fechaNacimiento,8, 2));


                                echo " CONTRASEÑA: ".$passwordLimpio;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">IFE / INE</th>
                            <td>
                                @if(Storage::disk('images')->has($alumno->ine))
                                    <div class="video-imagen-thumb">
                                        <div class="video-image-mask">
                                            <img src="{{ url('/miniatura/'.$alumno->ine) }}" class="video-image">
                                        </div>
                                    </div>
                                @else
                                    Falta agregar INE
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <p><a class="btn btn-success" href="{{ route('print',['alumno_id' => $alumno->id]) }}" target="_blank">Imprimir Kardex</a>
                        <a class="btn btn-primary" href="{{ route('elegirCursos', ['alumno_id' => $alumno->id, 'ciclo'=>'2022B']) }}" >Asignar Cursos 2022B</a>
                        @if(Auth::user()->role == 'admin')
                            <a href="{{ route('editar-alumno',['alumno_id' => $alumno->id]) }}" class="btn btn-primary"> Editar </a>
                            <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                            <a href="#victorModal{{$alumno->id}}" role="button" class="btn btn-danger" data-toggle="modal">Eliminar</a>

                            <!-- Modal / Ventana / Overlay en HTML -->
                    <div id="victorModal{{$alumno->id}}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><h4>X</h4></button>

                                </div>
                                <div class="modal-body">
                                    <h3>¿Seguro de Eliminar al Alumno?</h3>
                                    <h3 class="text-warning"><small>{{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}} {{$alumno->nombre}}</small></h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <a href="{{ route('delete-alumno',['alumno_id' => $alumno->id]) }}" type="button" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    </p>

                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Kardex</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Ciclo</th>
                            <th scope="col">Código Materia</th>
                            <th scope="col">Materia</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Estatus</th>
                            @if(Auth::user()->role == 'admin')
                                <th scope="col">Desmatricular</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($materias as $materia)
                            <tr>
                                <th scope="row">{{ $materia->ciclo}}</th>
                                <td>{{ $materia->id}}</td>
                                <td>{{ $materia->nombreCurso}}</td>
                                <td>{{ $materia->horario}}</td>
                                <td>{{ $materia->status}}</td>
                                <td>
                                @if(Auth::user()->role == 'admin')
                                    <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                                        <a href="#victorModal{{$materia->id}}" role="button" class="btn btn-primary" data-toggle="modal">Eliminar</a>

                                        <!-- Modal / Ventana / Overlay en HTML -->
                                        <div id="victorModal{{$materia->id}}" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">¿Estás seguro?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>¿Seguro que quiere quitar la materia?</p>
                                                        <p class="text-warning"><small>{{$materia->nombreCurso}}</small></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <a href="{{ url('/delete-lista/'.$materia->id).'/'.$alumno->id}}" type="button" class="btn btn-danger">Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    @endif
    <p>
        <a href="{{ route('home') }}" class="btn btn-primary">< Regresar</a>
    </p>
    <p>En caso de tener alguna duda o desea que le apoyen en el registro puede contactar por teléfono o whatsapp a los números 33-31-06-71-60 y 33-12-25-33-79</p>
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
