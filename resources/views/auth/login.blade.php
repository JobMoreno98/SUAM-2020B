@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if (session('message'))
                <div class="alert alert-success">
                    <h2>{{ session('message') }}</h2>

                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Acceso</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Nombre de usuario. (Apellido Paterno en minúsculas y año de nacimiento)</label>


                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contreseña: (Apellido Paterno en minúsculas y día de nacimiento)</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <h4><p>
IMPORTANTE: Si ya fue alumno nuestro, por favor acceda con su nombre de usuario y contrase&ntildea, de no recordarlos comun&iacute;quese con administraci&oacute;n a los siguientes n&uacute;meros 33-31-06-71-60 o al 33-14-08-43-24</p>
<br>
					<p>El nombre de usuario es su apellido paterno en minúsculas y su año de nacimiento o su apellido paterno, el mes y su año de nacimiento. <br>Ejemplo: perez1955
                                            </p>
                                            <p>La contraseña es su apellido paterno en minúsculas y su día de nacimiento. <br>Ejemplo: perez05</p></h4>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Acceder
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvido la contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h3>En caso de tener alguna duda o desea que le apoyen en el registro puede contactar por teléfono o whatsapp a los números 33-31-06-71-60 y 33-12-25-33-79</h3>
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
