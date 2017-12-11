@extends('base')

@section('contenido')

    
    <div class="row">
        <div class="col-lg-6">

            {!! Form::open(['url' => '/auth/login', 'method' => 'post', 'class' => 'form']) !!}

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
            </div>

            <div class="checkbox">
                Recordarme
                {!! Form::checkbox('remember') !!}
            </div>

            {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>


@endsection