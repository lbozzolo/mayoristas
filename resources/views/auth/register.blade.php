@extends('layout-login')

@section('body')

    <div class="row">



        <div style="width: 350px; margin: 60px auto 0 auto;">


            <h2 style="margin-bottom: 20px">Registro de usuario</h2>

            {!! Form::open(['url' => '/auth/register', 'method' => 'post', 'style' => 'display: block; margin-bottom: 60px']) !!}


            <div class="form-group">
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Telefono']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('domicilio', null, ['class' => 'form-control', 'placeholder' => 'Domicilio']) !!}
            </div>


        <div class="form-group">
                {!! Form::text('legajo', null, ['class' => 'form-control', 'placeholder' => 'Legajo']) !!}
            </div>

            <div class="form-group">
                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) !!}
            </div>

            <div class="form-group">
                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Contraseña']) !!}
            </div>

            <div class="form-group">
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Repetir contraseña']) !!}
            </div>

            <div>
                @include('partials.messages')
            </div>

            <div class="form-group">
                {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ asset('auth/login') }}" class="btn btn-default">Cancelar</a>
            </div>


            {!! Form::close() !!}


        </div>

    </div>


@endsection
