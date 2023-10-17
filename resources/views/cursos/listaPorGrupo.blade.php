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
                <h2>Listado de Cursos</h2>
                <hr>


                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
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
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Tel. Celular</th>
                            <th scope="col">Email</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Cambiar Estatus a:</th>
                            <th scope="col">Cambio de Grupo</th>
                            <th scope="col">Quitar del Grupo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $cont=0; ?>
                        @foreach($listaPorGrupo as $listaPorGrup)
                            <tr>

                                <th scope="row">{{$cont=$cont+1 }}</th>
                                <th scope="row">{{$listaPorGrup->id }}</th>
                                <td>{{ $listaPorGrup->apellidoPaterno }}</td>
                                <td>{{ $listaPorGrup->apellidoMaterno }}</td>
                                <td>{{ $listaPorGrup->nombre }}</td>
                                <td>{{ $listaPorGrup->telCelular }}</td>
                                <td>{{ $listaPorGrup->email }}</td>
                                <td>{{ $listaPorGrup->status }}</td>
                                @if($listaPorGrup->status == 'En Espera')
                                    <td><a href="{{ route('cambiar-estatus',['alumno_id' => $listaPorGrup->id, 'curso_id' => $curso->id, 'ciclo' => $listaPorGrup->ciclo]) }}" class="btn btn-success">Cambiar a Inscrito</a></td>
                                @else
                                    <td><a href="{{ route('cambiar-estatus',['alumno_id' => $listaPorGrup->id, 'curso_id' => $curso->id, 'ciclo' => $listaPorGrup->ciclo]) }}" class="btn btn-warning">Poner en Espera</a></td>
                                @endif
                                <td><a href="{{ route('elegirCursos', ['alumno_id' => $listaPorGrup->id, 'ciclo' => $listaPorGrup->ciclo]) }}" class="btn btn-primary">Cambiar de Grupo</a></td>
                                <td>
                                @if(Auth::user()->role == 'admin')
                                    <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                                        <a href="#modal{{$listaPorGrup->idLista}}" role="button" class="btn btn-danger" data-toggle="modal">Eliminar</a>

                                        <!-- Modal / Ventana / Overlay en HTML -->
                                        <div id="modal{{$listaPorGrup->idLista}}" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">¿Estás seguro?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>¿Seguro que quieres desinscribir al alumno?</p>
                                                        <p class="text-warning"><small>{{$listaPorGrup->apellidoPaterno}} {{$listaPorGrup->apellidoMaterno}} {{$listaPorGrup->nombre}}</small></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <a href="{{ url('/delete-lista-grupo/'.$listaPorGrup->idLista.'/'.$curso->id)}}" type="button" class="btn btn-danger">Eliminar</a>
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
        @endif
        <p>
            <a href="{{ route('listadoCursos',['ciclo' => $curso->ciclo]) }}" class="btn btn-primary">< Regresar</a>
        </p>
    </div>

@endsection
