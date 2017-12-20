@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

                @include('admin.partials.head')

            <div class="col-lg-1 col-xs-12">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <h3>Editar opción</h3><hr>
                <span>Paquete: '{!! $opcion->paquete->descripcion !!}'</span><br>
                <span>Opción: '{!! $opcion->descripcion !!}'</span>

                <div style="margin-top: 30px">
                    {!! Form::model($opcion, ['method' => 'put', 'url' => route('admin.opcion.update', $opcion->id)]) !!}

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('importe', 'Importe') !!}
                        {!! Form::text('importe', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('impuesto', 'Impuesto') !!}
                        {!! Form::text('impuesto', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ URL::previous() }}" class="btn cancelar">Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection