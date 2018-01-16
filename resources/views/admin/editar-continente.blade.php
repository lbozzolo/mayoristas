@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

                @include('admin.partials.head')

            <div class="col-lg-1 col-xs-12">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <h3>Editar Continente</h3>

                <div style="margin-top: 30px">
                    {!! Form::model($continente, ['method' => 'put', 'url' => route('admin.continente.update', $continente->id)]) !!}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre del continente') !!}
                        {!! Form::text('nombre', $continente->nombre, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción del continente') !!}
                        {!! Form::textarea('descripcion', $continente->descripcion, ['class' => 'form-control text-area', 'rows' => '6']) !!}
                    </div>

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ URL::previous() }}" class="btn cancelar">Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection