@extends('layouts.app')
@section('content')
    <div class="container">
       {{-- @if(Auth::check() && Auth::user()->role == 'admin') Comentar esta línea--}}
        @if (session('message'))
            <div class="alert alert-success">
                <h2>{{ session('message') }}</h2>

            </div>
        @endif
        <div class="row">
            <h2>Registro al SUAM</h2>
		<h3>IMPORTANTE: Si ya fue alumno nuestro, por favor acceda con su nombre de usuario y contrase&ntildea, de no recordarlos comun&iacute;quese con administraci&oacute;n a los siguientes n&uacute;meros 33-31-06-71-60 o al 33-14-08-43-24</h3>

            <hr>
            <p>* Campos Obligatorios</p>
            <form action="{{ route ('saveAlumno') }}" method="post" enctype="multipart/form-data" class="col-md-12">
                {!! csrf_field() !!}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            Debe de llenar todos los campos
                        </ul>
                    </div>
                @endif
                <div class="form-group col-md-4 col-xs-12{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label for="name">Nombre(s)*</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" >
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Apellido Paterno*</label>
                    <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="{{old('apellidoPaterno')}}" >
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Apellido Materno*</label>
                    <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="{{old('apellidoMaterno')}}" >
                </div>
                <div class="form-group col-md-2 col-xs-12">
                    <label for="nacimiento_dia">Día*</label>
                    <select class="form-control" id="nacimiento_dia" name="nacimiento_dia" >
                        <option disabled selected>Elegir día</option>
                        @for ($i = 1; $i <=31; $i++)
                            @if($i<=9)
                                <option value="0{{$i}}">{{$i}}</option>
                            @else
                                <option value="{{$i}}">{{$i}}</option>
                            @endif

                        @endfor
                    </select>
                </div>
                <div class="form-group col-md-2 col-xs-12">
                    <label for="name">Mes*</label>
                    <select class="form-control" id="nacimiento_mes" name="nacimiento_mes">
                        <option disabled selected>Elegir Mes</option>
                        <option value="01">Enero</option>
                        <option value="02">Febrero</option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                </div>
                <div class="form-group col-md-2 col-xs-12">
                    <label for="name">Año*</label>
                    <select class="form-control" id="nacimiento_anio" name="nacimiento_anio">
                        <option disabled selected>Año</option>
                        @for ($i = 1930; $i <=1970; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div class="form-group col-md-4 col-md-offset-2 col-xs-12">
                    <label for="estadoCivil">Estado Civil*</label>
                    <select class="form-control" id="estadoCivil" name="estadoCivil">
                        <option>Soltero(a)</option>
                        <option>Casado(a)</option>
                        <option>Divorciado(a)</option>
                        <option>Viudez</option>
                        <option>Unión Libre</option>
                    </select>
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <label for="name">Domicilio. Calle y número*</label>
                    <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{old('domicilio')}}" >
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Colonia*</label>
                    <input type="text" class="form-control" id="colonia" name="colonia" value="{{old('colonia')}}" >
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="name">Sector*</label>
                    <select class="form-control" id="sector" name="sector">
                        <option selected>No Definido</option>
                        <option>Hidalgo</option>
                        <option>Libertad</option>
                        <option>Juárez</option>
                        <option>Reforma</option>
                        <option>Fuera de Guadalajara</option>

                    </select>
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="cp">CP*</label>
                    <input type="text" class="form-control" id="cp" name="cp" value="{{old('cp')}}" >
                </div>
                <div class="form-group  col-md-4 col-xs-12">
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
                <div class="form-group  col-md-4 col-xs-12">
                    <label for="municipio">Municipio*</label>
                    <select class="form-control" id="municipio" name="municipio">
                        <option disabled selected>Seleccionar</option>
                        <option>Guadalajara</option>
                        <option>Zapopan</option>
                        <option>Tlaquepaque</option>
                        <option>Tlajomulco</option>
                        <option>Tonalá</option>
                        <option>El Salto</option>
                        <option>Chapala</option>
                        <option>Tala</option>
                        <option>Tuxpan</option>
                        <option>Poncitlán</option>
                        <option>Ciudad Guzmán</option>
                        <option>Puerto Vallarta</option>
                        <option>Fuera de Jalisco</option>

                    </select>
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="ine">Subir imagen de frente de INE (JPG)</label>
                    <input type="file" class="form-control" id="ine" name="ine" value="{{old('ine')}}" >
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="telCasa">Teléfono Casa</label>
                    <input type="text" class="form-control" id="telCasa" name="telCasa" value="{{old('telCasa')}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="telCelular">Teléfono Celular*</label>
                    <input type="text" class="form-control" id="telCelular" name="telCelular" value="{{old('telCelular')}}" >
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="escolaridad">Escolaridad*</label>
                    <select class="form-control" id="escolaridad" name="escolaridad" value="{{old('escolaridad')}}">
                        <option disabled selected>Seleccionar</option>
                        <option>Primaria</option>
                        <option>Secundaria</option>
                        <option>Bachillerato</option>
                        <option>Bachillerato Técnico</option>
                        <option>Licenciatura</option>
                        <option>Maestría</option>
                        <option>Doctorado</option>
                    </select>
                </div>

                <div class="form-group col-md-4 col-xs-12">
                    <label for="contacto">Contacto en Caso de Emergencia*</label>
                    <input type="text" class="form-control" id="contacto" name="contacto" value="{{old('contacto')}}" >
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="jubilado">¿Es Jubilado?*</label>
                    <select class="form-control" id="jubilado" name="jubilado">
                        <option>Si</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="institucionJubilacion">Institución de Jubilación</label>
                    <input type="text" class="form-control" id="institucionJubilacion" name="institucionJubilacion" value="{{old('institucionJubilacion')}}">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="equipo">Con que equipo de cómputo cuenta*</label>
                    <select class="form-control" id="equipo" name="equipo">
                        <option>Ninguno</option>
                        <option>Computadora</option>
                        <option>Tablet</option>
                        <option>Computadora y Tablet</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <label for="internet">Cuenta con Internet*</label>
                    <select class="form-control" id="internet" name="internet">
                        <option>No</option>
                        <option>Si</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Guardar datos</button>

            </form>
        </div>
        <div class="row">

            <br>
            <h3>En caso de tener alguna duda o desea que le apoyen en el registro puede contactar por teléfono o whatsapp a los números 33-31-06-71-60 y 33-12-25-33-79</h3>
            <hr>
            <p>CENTRO UNIVERSITARIO DE CIENCIAS SOCIALES Y HUMANIDADES.</p>
            <p>Sistema Universitario del Adulto Mayor (SUAM)</p>
            <p>Guanajuato 1047 Guadalajara (México)
            Tel.: 33 3819 3300 Ext 23653</p>
        </div>
        {{--Comentar esta línea
        @else
            El periodo de inscripciones se abrir� el d�a de ma�ana a las 9 am
            @endif--}}
    </div>
@endsection

