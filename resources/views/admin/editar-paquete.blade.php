@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">
            <h2 style="margin-bottom: 20px"><img src="{{ asset('img/logo.png') }}" style="background-color: gray; padding: 10px; margin-right: 20px; border-radius: 5px"> Admin panel</h2><hr>
            <div class="col-lg-1 col-xs-12">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <h3>Editar paquete</h3>

                <div style="margin-top: 30px">
                    {!! Form::model($paquete, ['method' => 'put', 'url' => route('admin.paquete.update', $paquete->id)]) !!}

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción del paquete') !!}
                        {!! Form::text('descripcion', $paquete->descripcion, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('pdf_file', 'Cambiar archivo PDF') !!}
                        {!! Form::file('pdf_file', ['class' => 'form-control']) !!}
                        Archivo actual: <em class="text-warning">{!! ($paquete->pdf_file != '')? $paquete->pdf_file : '- no hay pdf seleccionado -' !!}</em>
                    </div>

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ URL::previous() }}" class="btn cancelar">Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection