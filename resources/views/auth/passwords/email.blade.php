@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Restablecer contraseña</div>

                <div class="panel-body">
                    <h3>En caso de tener alguna duda o desea que le apoyen en la recuperación de la contraseña puede contactar por teléfono o whatsapp a los números 33-31-06-71-60 y 33-12-25-33-79</h3>
                    {{--l
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electrónico (email)</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar a su correo las liga para restablecer su contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                </div>--}}
            </div>
        </div>
    </div>
</div>
@endsection
