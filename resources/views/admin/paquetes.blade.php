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
                    <h3>Paquetes</h3>
                    {!! Form::open(['method' => 'post', 'url' => '', 'style' => 'margin-top: 30px', 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('continentes', 'Continentes') !!}
                        {!! Form::select('continentes', $continentes, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción del paquete') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('pdf_file', 'Archivo PDF') !!}
                        {!! Form::file('pdf_file', ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>

            </div>

            <div class="col-lg-4">

                @if(isset($paquetes))
                    <h3>Paquetes existentes</h3>
                    <ul class="list-unstyled" style="margin-top: 30px">
                        <li>Paquete 1</li>
                        <li>Paquete 2</li>
                        <li>Paquete 3</li>
                        <li>Paquete 4</li>
                    </ul>
                @endif
            </div>

        </div>
    </div>

@endsection