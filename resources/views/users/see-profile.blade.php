@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

            @include('admin.partials.head')

            <div class="col-lg-1 col-xs-12">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <div style="padding: 0px 50px">

                    <h2 style="margin-bottom: 5px">Perfil</h2>
                    <h3>{!! $usuario->nombre !!} {!! $usuario->apellido !!}</h3>

                    <div style="margin-top: 30px">
                        {!! Form::model($usuario, ['method' => 'put', 'url' => route('admin.usuarios.update', $usuario->id)]) !!}

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre', $usuario->nombre, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('apellido', 'Apellido') !!}
                            {!! Form::text('apellido', $usuario->apellido, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('legajo', 'Legajo') !!}
                            {!! Form::text('legajo', $usuario->legajo, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'Teléfono') !!}
                            {!! Form::text('telefono', $usuario->telefono, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('domicilio', 'Domicilio') !!}
                            {!! Form::text('domicilio', $usuario->domicilio, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', $usuario->email, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ URL::previous() }}" class="btn cancelar">Cancelar</a>
                        {!! Form::close() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection