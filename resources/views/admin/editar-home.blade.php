@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

            @include('admin.partials.head')

            <div class="col-lg-1 col-xs-12">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <h3>Editar 'Home'</h3>

                <div style="margin-top: 30px">
                    {!! Form::model($paquete, ['method' => 'put', 'url' => route('admin.paquete.update', $paquete->id), 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Título') !!}
                        {!! Form::text('nombre', $paquete->nombre, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!} (máximo 500 caracteres)
                        {!! Form::textarea('descripcion', $paquete->descripcion, ['class' => 'form-control', 'rows' => '8', 'style' => 'margin-bottom: 10px']) !!}
                    </div>

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ URL::previous() }}" class="btn cancelar">Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection