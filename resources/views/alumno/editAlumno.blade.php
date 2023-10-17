@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Auth::user()->role == 'admin')
        <div class="row">
            <h2>Editar Información del Alumno: {{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}} {{$alumno->nombre}}</h2>
            <hr>
            <form action="{{ url('update-alumno',['alumno_id' =>$alumno->id]) }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            Debe de llenar todos los campos
                        </ul>
                    </div>
                @endif
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Nombre(s)</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$alumno->nombre}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="{{$alumno->apellidoPaterno}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="{{$alumno->apellidoMaterno}}">
                </div>
                <div class="form-group col-md-3 col-xs-12">
                    <label for="name">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="nacimiento" name="nacimiento" value="{{$alumno->fechaNacimiento}}">
                </div>
                <div class="form-group col-md-5 col-xs-12">
                    <label for="name">Domicilio. Calle y número:</label>
                    <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{$alumno->domicilio}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Colonia</label>
                    <input type="text" class="form-control" id="colonia" name="colonia" value="{{$alumno->colonia}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Sector</label>
                    <input type="text" class="form-control" id="sector" name="sector" value="{{$alumno->sector}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="cp">CP</label>
                    <input type="text" class="form-control" id="cp" name="cp" value="{{$alumno->cp}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="estado">Estado*</label>
                    <select class="form-control" id="estado" name="estado">
                        <option disabled>Seleccione uno...</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco" selected>Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="municipio">Municipio</label>
                    <input type="text" class="form-control" id="municipio" name="municipio" value="{{$alumno->municipio}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="ine">INE</label>
                    @if(Storage::disk('images')->has($alumno->ine))
                        <div class="video-imagen-thumb">
                            <div class="video-image-mask">
                                <img src="{{ url('/miniatura/'.$alumno->ine) }}" class="video-image">
                            </div>
                        </div>
                    @endif
                    <input type="file" class="form-control" id="ine" name="ine" value="{{$alumno->ine}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="telCasa">Teléfono Casa</label>
                    <input type="text" class="form-control" id="telCasa" name="telCasa" value="{{$alumno->telCasa}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="telCelular">Teléfono Celular</label>
                    <input type="text" class="form-control" id="telCelular" name="telCelular" value="{{$alumno->telCelular}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="email">Correo Electrónico</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$alumno->email}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="escolaridad">Escolaridad</label>
                    <input type="text" class="form-control" id="escolaridad" name="escolaridad" value="{{$alumno->escolaridad}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="estadoCivil">Estado Civil:</label>
                    <select class="form-control" id="estadoCivil" name="estadoCivil">
                        <option>{{$alumno->estadoCivil}}</option>
                        <option disabled>Seleccionar</option>
                        <option>Soltero(a)</option>
                        <option>Casado(a)</option>
                        <option>Divorciado(a)</option>
                        <option>Viudez</option>
                        <option>Unión Libre</option>
                    </select>
                </div>
                <div class="form-group col-md-8 col-xs-12">
                    <label for="contacto">Contacto en Caso de Emergencia:</label>
                    <input type="text" class="form-control" id="contacto" name="contacto" value="{{$alumno->contacto}}">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <label for="jubilado">¿Es Jubilado?</label>
                    <select class="form-control" id="jubilado" name="jubilado">
                        <option>{{$alumno->jubilado}}</option>
                        <option disabled>Seleccionar</option>
                        <option>Si</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <label for="institucionJubilacion">Institución de Jubilación</label>
                    <input type="text" class="form-control" id="institucionJubilacion" name="institucionJubilacion" value="{{$alumno->institucionJubilacion}}">
                </div>
                <button type="submit" class="btn btn-success">Guardar datos</button>
                <a href="{{ route('listadoAlumnos') }}" class="btn btn-danger"> Cancelar </a>
            </form>

            <div class="row">

                <br>
                <h3>En caso de tener alguna duda o desea que le apoyen en el registro puede contactar por teléfono o whatsapp a los números 33-31-06-71-60 y 33-12-25-33-79</h3>
                <hr>
                <p>CENTRO UNIVERSITARIO DE CIENCIAS SOCIALES Y HUMANIDADES.</p>
                <p>Sistema Universitario del Adulto Mayor (SUAM)</p>
                <p>Guanajuato 1047 Guadalajara (México)
                    Tel.: 33 3819 3300 Ext 23653</p>
            </div>
        </div>
        @endif
    </div>
@endsection
