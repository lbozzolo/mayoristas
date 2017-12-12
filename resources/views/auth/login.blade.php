@extends('layout-login')

@section('body')

    <div class="row">
        <div style="width: 350px; margin: 100px auto 0 auto;">

            <h2 style="margin-bottom: 20px">Inicio de sesión</h2>

            {!! Form::open(['url' => '/auth/login', 'method' => 'post', 'style' => 'display: block; margin-bottom: 60px']) !!}

            <div class="form-group">
                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) !!}
            </div>

            <div class="form-group">
                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Contraseña']) !!}
            </div>

            <div class="checkbox">
                <label>
                    {!! Form::checkbox('remember') !!}Recordarme
                </label>
            </div>

            <div>
                @include('partials.messages')
            </div>

            <div class="form-group">
                {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

            <div class="form-group">
                <a href="#">Olvidé mi contraseña</a><br>
                <a href="{{ asset('/auth/register') }}">Registrarse</a>
            </div>


        </div>
    </div>


@endsection
