@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 100px">
            <h2 style="margin-bottom: 20px"><img src="{{ asset('img/logo.png') }}" style="background-color: gray; padding: 10px; margin-right: 20px; border-radius: 5px"> Admin panel</h2><hr>
            <div class="col-lg-1">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7">

                <div style="padding: 0px 50px">
                    <h3>Continentes</h3>
                    {!! Form::open(['method' => 'post', 'url' => '', 'style' => 'margin-top: 30px']) !!}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>

            </div>

            <div class="col-lg-4"></div>

        </div>
    </div>

@endsection