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

                    <h3>Crear Usuario</h3>

                    <div style="margin-top: 30px">
                        {!! Form::open(['method' => 'post', 'url' => route('admin.usuarios.store')]) !!}

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('apellido', 'Apellido') !!}
                            {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('legajo', 'Legajo') !!}
                            {!! Form::text('legajo', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'Teléfono') !!}
                            {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('domicilio', 'Domicilio') !!}
                            {!! Form::text('domicilio', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('rol', 'Tipo de usuario') !!}
                            {!! Form::select('rol', ['1' => 'Administrador', '2' => 'Mayorista'], null, ['placeholder' => '', 'class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ URL::previous() }}" class="btn cancelar">Cancelar</a>
                        {!! Form::close() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection